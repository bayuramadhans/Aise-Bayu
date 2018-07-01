<?php

namespace App\Http\Controllers;

use App\User;
use App\Teams;
use App\PesertaAiss;
use App\Participans;
use Redirect;
use Auth;
use Storage;
use Response;
use App\Mail\VerifedAlproMail;
use App\Mail\BuktiSalahAlproMail;
use App\Mail\LengkapiDataAlproMail;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller {
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function dashboardShow(){
        $pesertaAiss = PesertaAiss::count();
        $pesertaAissVerifed = PesertaAiss::where('status', 1)->count();
        $team = Teams::count();
        $teamVerifed = Teams::where('status', 1)->count();
        return view('admin.dashboard', compact('pesertaAissVerifed', 'pesertaAiss', 'team', 'teamVerifed'));
    }

    public function listTeam(){
        $team = Teams::orderBy('created_at', 'ASC')->orderBy('status', 'ASC')->with('Participans')->with('Users')->paginate(5);
        $totTeam = Teams::count();
        $verifed = Teams::where('status', 1)->count();
        $notVerifed = Teams::where('status', 0)->count();
        return view ('admin.alpro.index', compact('team', 'totTeam', 'verifed', 'notVerifed'));
    }

    public function participanEditShow($id){
        $participans = Participans::where('id', $id)->first();
        return view ('admin.alpro.edit_participans', compact('participans'));
    }

    public function participanUpdate($id, Request $req){
        $rules = [
            'nama_lengkap'   => 'required|string|min:3|max:20',
            'tempat_lahir'    => 'required|string|min:3',
            'tanggal_lahir'   => 'required',
            'alamat'  => 'required|min:3',
            'no_telp' => 'required|string|min:10|max:13',
        ];

        $message = [
            'nama_lengkap.required'  => 'nama lengkap harus diisi!!',
            'nama_lengkap.min'    => 'nama lengkap minimal 3 karakter',
            'nama_lengkap.max'    => 'nama lengkap maksimal 20 karakter',

            'tempat_lahir.required'   => 'tempat lahir harus diisi!!',
            'tempat_lahir.min'    => 'tempat lahir minimal 3 karakter',

            'tanggal_lahir.required'   => 'tanggal lahir harus diisi!!',

            'alamat.required'     => 'alamat harus diisi!!',
            'alamat.min'  => 'alamat minimal 3 karakter',

            'no_telp.required'    => 'no telp harus diisi!!',
            'no_telp.min' => 'no telp minimal 10 angka',
            'no_telp.max' => 'no telp maksimal 13 angka',
        ];

        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $update = Participans::where('id', $id)->update([
            'nama_lengkap'  => $req->nama_lengkap,
            'tempat_lahir'  => $req->tempat_lahir,
            'tanggal_lahir' => $req->tanggal_lahir,
            'alamat'    => $req->alamat,
            'no_telp'   => $req->no_telp,
        ]);

        return redirect('admin/alpro');
    }

    public function teamEditShow($id){
        $team = Teams::where('id_teams', $id)->first();
        return view('admin.alpro.edit_team', compact('team'));
    }

    public function teamUpdate($id, Request $req){
        $rules = [
            'nama_team' => 'required|string|max:20|min:3',
            'nama_pembina' => 'nullable|string|min:3|max:20',
            'no_telp_pembina' => 'nullable|string|min:10|max:13',
            'kota'  => 'required|string|min:3',
            'asal_sekolah'  => 'required|string|min:3',
        ];

        $message = [
            'nama_team.required'   => 'nama team harus diisi!!',
            'nama_team.max' => 'nama team maksimal 20 karakter',
            'nama_team.min' => 'nama team minimal 3 karakter',

            'nama_pembina.min'  => 'nama pembina minimal 3 karakter',
            'nama_pembina.max'  => 'nama pembina maksimal 20 karakter',

            'no_telp_pembina.min' => 'no telp pembina minimal 10 angka',
            'no_telp_pembina.max' => 'no telp pembina maksimal 13 angka',

            'kota.required' => 'kota harus diisi!!',
            'kota.min'  => 'kota minimal 3 karakter',

            'asal_sekolah.required'  => 'asal sekolah harus diisi',
            'asal_sekolah.min'  => 'asal sekolah minimal 3 karakter',
        ];

        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $nama_pembina = '';
        $no_telp_pembina = '';

        if ($req->nama_pembina != ''){
            $nama_pembina = $req->nama_pembina;
        }

        if ( $req->no_telp_pembina != ''){
            $no_telp_pembina = $req->no_telp_pembina;
        }


        $update = Teams::where('id_teams', $id)->update([
            'nama_team' => $req->nama_team,
            'kota'  => $req->kota,
            'asal_sekolah'  => $req->asal_sekolah,
            'nama_pembina'  => $nama_pembina,
            'no_telp_pembina'   => $no_telp_pembina,
        ]);

        return redirect('admin/alpro');
    }

    public function usersShow(){
        $users = User::orderBy('confirmed', 'ASC')->orderBy('created_at', 'ASC')->paginate(10);
        $totUser = User::count();
        $verifed = User::where('confirmed', 1)->count();
        $notVerifed = User::where('confirmed', 0)->count();

        return view('admin.alpro.list_users', compact('users','totUser', 'verifed', 'notVerifed'));
    }

    public function usersEditShow($id){
        $users = User::where('id', $id)->first();
        return view('admin.alpro.edit_users', compact('users'));
    }

    public function usersUpdate(Request $req){

    }

    public function verifikasiEmailAlpro($id){
        $team = Teams::where('id_teams', $id)->with('Users')->first();
        if (!$team){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/alpro');
        }

        $email = '';
        foreach ($team->users as $i) {
            # code...
            $email = $i->email;
        }

        $code = new \stdClass();
        $code->nama_team = $team->nama_team;

        Mail::to($email)->send(new VerifedAlproMail($code));
        $update = Teams::where('id_teams', $id)->update([
            'status'    => 1
        ]);

        flash('Verifikasi ' . $team->nama_team . ' berhasil dikirim')->success();
        return redirect('/admin/alpro');
    }

    public function buktiSalahEmailAlpro($id){
        $team = Teams::where('id_teams', $id)->with('Users')->first();
        if (!$team){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/alpro');
        }

        $email = '';
        foreach ($team->users as $i) {
            # code...
            $email = $i->email;
        }

        $code = new \stdClass();
        $code->nama_team = $team->nama_team;

        Mail::to($email)->send(new BuktiSalahAlproMail($code));
        flash('Email pemberitahuan ' . $team->nama_team . ' berhasil dikirim')->success();
        return redirect('/admin/alpro');
    }

    public function lengkapiDataEmailAlpro($id){
        $team = Teams::where('id_teams', $id)->with('Users')->first();
        if (!$team){
            flash('Id '. $id . ' tidak ditemukan')->error();
            return redirect('/admin/alpro');
        }

        $email = '';
        foreach ($team->users as $i) {
            # code...
            $email = $i->email;
        }

        $code = new \stdClass();
        $code->nama_team = $team->nama_team;

        Mail::to($email)->send(new LengkapiDataAlproMail($code));
        flash('Email pemberitahuan ' . $team->nama_team . ' berhasil dikirim')->success();
        return redirect('/admin/alpro');
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
      // $request->session()->flush();
      //
      // $request->session()->regenerate();
        return redirect('/masuk');
    }
}
