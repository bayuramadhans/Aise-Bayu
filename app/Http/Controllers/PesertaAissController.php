<?php

namespace App\Http\Controllers;

use App\PesertaAiss;
use Redirect;
use Auth;
use Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Validator;

class PesertaAissController extends Controller {
    public function __construct(){
        // $this->middleware('auth:admin');
    }

    public function editFromToken($token, Request $req){
        $pesertaAiss = PesertaAiss::where('email', $req->email)->where('token', $token)->first();

        if (!$pesertaAiss){
            return view('error.404');
        } else {
            if ($pesertaAiss->status == 1){
                return view('error.404');
            }
            return view('edit_peserta_aiss', compact('pesertaAiss'));
        }
    }

    public function updateFromToken($token, Request $req){
        $rules = [
            'nama' => 'required|string|min:3|max:20',
            'no_telp' => 'required|string|min:10|max:13',
            'bukti_pembayaran' => 'mimes:jpeg,jpg,png|max:2000',
        ];
        $validator = Validator::make($req->all(), $rules);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        if ($req->hasFile('bukti_pembayaran')){
            $delBukti = PesertaAiss::where('email', $req->email)->first();
            Storage::delete($delBukti->bukti_pembayaran);
            // return response()->json('okee');
            $bukti = Storage::put('public/aiss/bukti', $req->file('bukti_pembayaran'));

            $update = PesertaAiss::where('email', $req->email)->update([
                'nama_lengkap' => $req->nama,
                'no_telp'   => $req->no_telp,
                'asal_institusi'   => $req->institusi,
                'bukti_pembayaran'  => $bukti
            ]);
            flash('data berhasil diperbarui, silahkan tunggu konfirmasi dari kami')->success();
            return redirect('aiss/edit' . '/' . $token . '?email=' . $req->email);
        } else {
            $update = PesertaAiss::where('email', $req->email)->update([
                'nama_lengkap' => $req->nama,
                'no_telp'   => $req->no_telp,
                'asal_institusi'   => $req->institusi
            ]);
            flash('data berhasil diperbarui, silahkan tunggu konfirmasi dari kami')->success();
            return redirect('aiss/edit' . '/' . $token . '?email=' . $req->email);
        }
    }

    public function showBuktiAiss($token, Request $req){
        $bukti = PesertaAiss::where('token', $token)->where('email', $req->email)->first();
        if ($bukti){
            $contents = Storage::get($bukti->bukti_pembayaran);
            return Image::make($contents)->response();
        } else {
            return "";
        }
    }
}
