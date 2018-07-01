<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\PesertaAiss;
use Redirect;
use Storage;
use App\Mail\VerifyMail;
use App\Mail\WaitKonfirmasiAissMail;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller {

    public function showRegisterAlpro(){
        if (Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
            flash('This admin')->success();
        } else if (Auth::guard('peserta')->check()){
            return redirect('/alpro/dashboard');
            flash('This peserta')->success();
        }
        return view('register_alpro');
    }

    public function showRegisterAiss(){
        return view('register_aiss');
    }

    public function store(Request $req)
    {
        $rules = [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ];

        $message = [
            'email.required'    => 'email harus diisi',
            'email.email'   => 'format email tidak benar',
            'email.unique'  => 'email sudah terdaftar',
            'password.confirmed' => 'confirm password harus sama!!',
            'password.required' => 'password harus diisi',
            'password.min'    => 'password min 8 karakter'
        ];
        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);

        User::create([
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'confirmation_code' => $confirmation_code
        ]);

        $code = new \stdClass();
        $code->confrim = $confirmation_code;
        $code->email = $req->email;
        Mail::to($req->email)->send(new VerifyMail($code));

        // Flash::message('Thanks for signing up! Please check your email.');
        flash('Berhasil, silahkan cek email')->success();
        return redirect('/daftar');
    }

    public function storeAiss(Request $req){
        $rules = [
            'email' => 'required|email|unique:peserta_aiss',
            'nama' => 'required|string|min:3|max:20',
            'no_telp' => 'required|string|min:10|max:13',
            'institusi' => 'required|string|min:3',
            'bukti_pembayaran' => 'mimes:jpeg,jpg,png|required|max:2000',
        ];

        $message = [
            'email.required'    => 'email harus diisi!!',
            'email.email'   => 'format email salah',
            'email.unique'  => 'email sudah terdaftar',
            'nama.required' => 'nama lengkap harus diisi!!',
            'nama.min'  => 'nama lengkap minimal 3 karakter',
            'nama.max'  => 'nama lengkap maksimal 20 karakter',
            'no_telp.required'  => 'no telp harus diisi!!',
            'no_telp.min'   => 'no telp minimal 10 angka',
            'no_telp.max'   => 'no telp maksimal 13 angka',
            'institusi.required'    => 'asal institusi harus diisi!!',
            'institusi.min' => 'asal institusi minimal 3 karakter',
            'bukti_pembayaran.required' => 'bukti pembayaran harus diupload',
            'bukti_pembayaran.mimes'    => 'format bukti pembayaran harus jpeg/jpg/png',
            'bukti_pembayaran.max'  => 'bukti pembayaran maksimal 2mb'
        ];

        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $pesertaAiss = new pesertaAiss();
        $pesertaAiss->nama_lengkap = $req->nama;
        $pesertaAiss->email = $req->email;
        $pesertaAiss->no_telp = $req->no_telp;
        $pesertaAiss->asal_institusi = $req->institusi;
        $bukti = Storage::put('public/aiss/bukti', $req->file('bukti_pembayaran'));
        $pesertaAiss->bukti_pembayaran = $bukti;
        $pesertaAiss->save();

        $code = '';
        Mail::to($req->email)->send(new WaitKonfirmasiAissMail($code));
        flash('Berhasil, data akan kami cek terlebih dahulu silahkan cek email kembali dalam 1x24 jam')->success();

        return redirect('/daftar-aiss');
    }

    public function verifikasiEmail(Request $req, $code){
        if( ! $code)
        {
            // throw new InvalidConfirmationCodeException;
            flash('silahkan daftar terlebih dahulu')->error();
            return redirect('/daftar');
        }

        $user = User::where('email', $req->email)->where('confirmation_code', $code)->update(['confirmed' => 1]);
        if (!$user){
            flash('silahkan daftar terlebih dahulu')->error();
            return redirect('/daftar');
        }

        // foreach ($user as $i) {
        //     # code...
        //     User::where('id', $user->id)->update(['confirmed' => 1]);
        // }
        return redirect('/daftar');
    }
}
