<?php

namespace App\Http\Controllers;

use App\User;
use App\Teams;
use App\PesertaAiss;
use Redirect;
use Auth;
use Storage;
use Response;
use App\Mail\VerifedAissMail;
use App\Mail\BuktiSalahAissMail;
use App\Mail\DataSalahAissMail;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AissController extends Controller {
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function listAiss(){
        $pesertaAiss = PesertaAiss::orderBy('created_at', 'DESC')->orderBy('status', 'ASC')->paginate(5);
        $totPeserta = PesertaAiss::count();
        $verifed = PesertaAiss::where('status', 1)->count();
        $notVerifed = PesertaAiss::where('status', 0)->count();
        return view ('admin.aiss.index', compact('pesertaAiss', 'verifed', 'notVerifed', 'totPeserta'));
    }

    public function detailPeserta($id){
        $pesertaAiss = PesertaAiss::where('id', $id)->first();
        if (!$pesertaAiss){
            return view('error.404');
        }
        return view ('admin.aiss.lihat_peserta', compact('pesertaAiss'));
    }

    public function showBuktiAiss($id){
        $bukti = PesertaAiss::where('id', $id)->first();
        $contents = Storage::get($bukti->bukti_pembayaran);
        return Image::make($contents)->response();
    }

    //Edit Peserta
    public function editPesertaShow($id){
        $pesertaAiss = PesertaAiss::where('id', $id)->first();
        return view ('admin.aiss.edit_peserta', compact('pesertaAiss'));
    }

    public function updatePeserta(Request $req, $id){
        $rules = [
            'email' => 'required|email',
            'nama' => 'required|string|min:3|max:20',
            'no_telp' => 'required|string|min:10|max:13',
        ];
        $validator = Validator::make($req->all(), $rules);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        if ($req->hasFile('bukti_pembayaran')){
            $ruleImg = [
                'bukti_pembayaran' => 'mimes:jpeg,jpg,png|required|max:2000',
            ];
            $validator = Validator::make($req->all(), $ruleImg);
            if($validator->fails())
            {
                return Redirect::back()->withInput()->withErrors($validator);
            }

            $delBukti = PesertaAiss::where('id', $id)->first();
            Storage::delete($delBukti->bukti_pembayaran);
            // return response()->json('okee');
            $bukti = Storage::put('public/aiss/bukti', $req->file('bukti_pembayaran'));
            $update = PesertaAiss::where('id', $id)->update([
                'nama_lengkap' => $req->nama,
                'email' => $req->email,
                'no_telp' => $req->no_telp,
                'asal_institusi'  => $req->institusi,
                'bukti_pembayaran' => $bukti
            ]);

            if (!$update){
                flash('gagal mengupdate')->error();
                return Redirect::back();
            }
        } else {
            $update = PesertaAiss::where('id', $id)->update([
                'nama_lengkap' => $req->nama,
                'email' => $req->email,
                'no_telp' => $req->no_telp,
                'asal_institusi'  => $req->institusi
            ]);

            if (!$update){
                flash('gagal mengupdate')->error();
                return Redirect::back();
            }
        }

        return redirect('/admin/aiss');
    }

    //Email
    public function verifikasiEmail($id){
        $aiss = PesertaAiss::where('id', $id)->first();
        if (!$aiss){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/aiss');
        }
        $code = '';
        Mail::to($aiss->email)->send(new VerifedAissMail($code));

        $update = PesertaAiss::where('id', $id)->update([
            'status'    => 1
        ]);
        flash('Verifikasi email ' . $aiss->email . ' berhasil dilakukan')->success();
        return redirect('/admin/aiss');
        // $code = '';
    }
    public function buktiSalahEmail($id){
        $aiss = PesertaAiss::where('id', $id)->first();
        if (!$aiss){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/aiss');
        }

        $token = str_random(60);
        $code = new \stdClass();
        $code->token = $token;
        $code->nama_lengkap = $aiss->nama_lengkap;
        $code->no_telp = $aiss->no_telp;
        $code->asal_institusi = $aiss->asal_institusi;
        $code->email = $aiss->email;

        Mail::to($aiss->email)->send(new BuktiSalahAissMail($code));
        $update = PesertaAiss::where('id', $id)->update([
            'token' => $token
        ]);

        flash('Token ' . $aiss->email . ' berhasil dikirim')->success();
        return redirect('/admin/aiss');
    }

    public function dataSalahEmail($id){
        $aiss = PesertaAiss::where('id', $id)->first();
        if (!$aiss){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/aiss');
        }

        $token = str_random(60);
        $code = new \stdClass();
        $code->token = $token;
        $code->nama_lengkap = $aiss->nama_lengkap;
        $code->no_telp = $aiss->no_telp;
        $code->asal_institusi = $aiss->asal_institusi;
        $code->email = $aiss->email;

        Mail::to($aiss->email)->send(new DataSalahAissMail($code));
        $update = PesertaAiss::where('id', $id)->update([
            'token' => $token
        ]);

        flash('Token ' . $aiss->email . ' berhasil dikirim')->success();
        return redirect('/admin/aiss');
    }
}
