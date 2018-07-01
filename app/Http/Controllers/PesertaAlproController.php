<?php

namespace App\Http\Controllers;

use App\User;
use App\Participans;
use App\Teams;
use Redirect;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesertaAlproController extends Controller {
    public function __construct(){
        $this->middleware('auth:peserta');
    }

    // public function detailFormShow(){
    //     $id = Auth::guard('peserta')->user()->id;
    //     $cekTeam = Teams::where('id_users', $id)->first();
    //     if (empty($cekTeam)){
    //         return view('form_detail_team', compact('id'));
    //     } else {
    //         return view('peserta.dashboard');
    //     }
    // }

    public function dashboard_view(request $req){
        $id = Auth::guard('peserta')->user()->id;
        $cekTeam = Teams::where('id_users', $id)->first();
        if (empty($cekTeam)){
            return view('form_detail_team', compact('id'));
        }
        // get team data
        $idUsers = Auth::user()->id;
        $team = Teams::where('id_users', $idUsers)->first();
        if (empty($team)){
          $team = new Teams();
          $participan1 = new Participans();
          $participan2 = new Participans();
        } else {
          $idTeams = $team->id_teams;
          $participans = Participans::where('id_teams', $idTeams)->get();
          $participan1 = $participans->first();
          foreach ($participans as $participan){
            $participan2 = $participan;
          }
          if (empty($participan1)){
            $participan1 = new Participans();
          }
          if (empty($participan2) or $participan1->id == $participan2->id){
            $participan2 = new Participans();
          }
        }

        // return form
        return view('alpro/dashboard_view', compact('team','participan1','participan2','participan3'));
    }

      public function dashboard_form(request $req){
          // get team data
          $idUsers = Auth::user()->id;
          $team = Teams::where('id_users', $idUsers)->first();
          if (empty($team)){
            $team = new Teams();
            $participan1 = new Participans();
            $participan2 = new Participans();
          } else {
            $idTeams = $team->id_teams;
            $participans = Participans::where('id_teams', $idTeams)->get();
            $participan1 = $participans->first();
            foreach ($participans as $participan){
              $participan2 = $participan;
            }
            if (empty($participan1)){
              $participan1 = new Participans();
            }
            if (empty($participan2) or $participan1->id == $participan2->id){
              $participan2 = new Participans();
            }
          }

          // return form
          return view('alpro/dashboard_crud', compact('team','participan1','participan2','participan3'));
      }


        public function dashboard_form_post(request $req){
          $request = $req;

          // team data validator
          $this->validate($request, [
              'nama_team' => 'required',
              'kota' => 'required',
              'asal_sekolah' => 'required',
              'nama_pembina' => 'required',
              'no_telp_pembina' => 'required',
          ]);

          // get team data
          $idUsers = Auth::user()->id;
          $team = Teams::where('id_users', $idUsers)->first();
          if (empty($team)){
            $team = new Teams();
            $participan1 = new Participans();
            $participan2 = new Participans();
          } else {
            $idTeams = $team->id_teams;
            $participans = Participans::where('id_teams', $idTeams)->get();
            $participan1 = Participans::where('id_teams', $idTeams)->first();
            foreach ($participans as $participan){
              $participan2 = $participan;
            }
            $participan1 = Participans::where('id', $participan1->id)->first();
            $participan2 = Participans::where('id', $participan2->id)->first();
            if (empty($participan1)){
              $participan1 = new Participans();
            }
            if (empty($participan2) or $participan1->id == $participan2->id){
              $participan2 = new Participans();
            }
          }

          // save team data
          $team->nama_team = $req->nama_team;
          $team->kota = $req->kota;
          $team->asal_sekolah = $req->asal_sekolah;
          $team->nama_pembina = $req->nama_pembina;
          $team->no_telp_pembina = $req->no_telp_pembina;
          $team->id_users = $idUsers;
          $team->save();

          // get team id
          $team = Teams::where('id_users', $idUsers)->first();
          $idTeams = $team->id_teams;

          // participant1 data validator
          $this->validate($request, [
              'nama_lengkap_ketua' => 'required',
              'tempat_lahir_ketua' => 'required',
              'tanggal_lahir_ketua' => 'required',
              'alamat_ketua' => 'required',
              'no_telp_ketua' => 'required',
              'pas_foto_ketua' => 'image|nullable|max:199999',
              'foto_ktp_ketua' => 'image|nullable|max:1999',
          ]);

          // handle pas foto participant1 upload
          if($request->hasFile('pas_foto_ketua')){
              $filenameWithExt = $request->file('pas_foto_ketua')->getClientOriginalName();
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              $extension = $request->file('pas_foto_ketua')->getClientOriginalExtension();
              $fileNameToStore = $idTeams.'_'.$filename.'_'.time().'.'.$extension;
              $path = $request->file('pas_foto_ketua')->storeAs('public/pas_foto_ketua', $fileNameToStore);
          }
          else{
            $fileNameToStore = null;
          }
          $pas_foto_ketua = $fileNameToStore;

          // handle foto ktp participant1 upload
          if($request->hasFile('foto_ktp_ketua')){
              $filenameWithExt = $request->file('foto_ktp_ketua')->getClientOriginalName();
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
              $extension = $request->file('foto_ktp_ketua')->getClientOriginalExtension();
              $fileNameToStore = $idTeams.'_'.$filename.'_'.time().'.'.$extension;
              $path = $request->file('foto_ktp_ketua')->storeAs('public/foto_ktp_ketua', $fileNameToStore);
          }
          else{
            $fileNameToStore = null;
          }
          $foto_ktp_ketua = $fileNameToStore;

          // check participant1 data
          if (empty($participan1)){
            $ketua = new Participans();
          } else {
            $ketua = $participan1;
          }

          // save participant1 data
          $ketua->nama_lengkap = $req->nama_lengkap_ketua;
          $ketua->tempat_lahir = $req->tempat_lahir_ketua;
          $ketua->tanggal_lahir = $req->tanggal_lahir_ketua;
          $ketua->alamat = $req->alamat_ketua;
          $ketua->no_telp = $req->no_telp_ketua;
          $ketua->id_teams = $idTeams;
          $ketua->pas_foto = $pas_foto_ketua;
          $ketua->foto_ktp = $foto_ktp_ketua;
          $ketua->save();

          if ($req->input_anggota==True){

            // participant2 data validator
            $this->validate($request, [
                'nama_lengkap_anggota' => 'required',
                'tempat_lahir_anggota' => 'required',
                'tanggal_lahir_anggota' => 'required',
                'alamat_anggota' => 'required',
                'no_telp_anggota' => 'required',
                'pas_foto_anggota' => 'image|nullable|max:1999',
                'foto_ktp_anggota' => 'image|nullable|max:1999',
            ]);

            // handle pas foto participant2 upload
            if($request->hasFile('pas_foto_anggota')){
                $filenameWithExt = $request->file('pas_foto_anggota')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('pas_foto_anggota')->getClientOriginalExtension();
                $fileNameToStore = $idTeams.'_'.$filename.'_'.time().'.'.$extension;
                $path = $request->file('pas_foto_anggota')->storeAs('public/pas_foto_anggota', $fileNameToStore);
            }
            else{
              $fileNameToStore = null;
            }
            $pas_foto_anggota = $fileNameToStore;

            // handle foto ktp participant2 upload
            if($request->hasFile('foto_ktp_anggota')){
                $filenameWithExt = $request->file('foto_ktp_anggota')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('foto_ktp_anggota')->getClientOriginalExtension();
                $fileNameToStore = $idTeams.'_'.$filename.'_'.time().'.'.$extension;
                $path = $request->file('foto_ktp_anggota')->storeAs('public/foto_ktp_anggota', $fileNameToStore);
            }
            else{
              $fileNameToStore = null;
            }
            $foto_ktp_anggota = $fileNameToStore;

            // check participant2 data
            if (empty($participan2)){
              $anggota = new Participans();
            } else {
              $anggota = $participan2;
            }

            // save participant2 data
            $anggota = new Participans();
            $anggota->nama_lengkap = $req->nama_lengkap_anggota;
            $anggota->tempat_lahir = $req->tempat_lahir_anggota;
            $anggota->tanggal_lahir = $req->tanggal_lahir_anggota;
            $anggota->alamat = $req->alamat_anggota;
            $anggota->no_telp = $req->no_telp_anggota;
            $anggota->id_teams = $idTeams;
            $ketua->pas_foto = $pas_foto_ketua;
            $ketua->foto_ktp = $foto_ktp_ketua;
            $anggota->save();
          }

          // return to dashboard
          return route('dashboard.peserta.show');
        }

    public function createTeamBaru(Request $req){
        $rules = [
            'nama_team' => 'required|string|max:20|min:3',
            'nama_pembina' => 'nullable|string|min:3|max:20',
            'no_telp_pembina' => 'nullable|string|min:10|max:13',
            'kota'  => 'required|string|min:3',
            'asal_sekolah'  => 'required|string|min:3',
            'nama_lengkap_ketua'   => 'required|string|min:3|max:20',
            'tempat_lahir_ketua'    => 'required|string|min:3',
            'tanggal_lahir_ketua'   => 'required',
            'alamat_ketua'  => 'required|min:3',
            'no_telp_ketua' => 'required|string|min:10|max:13',
            'nama_lengkap_anggota'   => 'nullable|string|min:3|max:20',
            'tempat_lahir_anggota'    => 'nullable|string|min:3',
            'alamat_anggota'  => 'nullable|string|min:3',
            'no_telp_anggota' => 'nullable|string|min:10|max:13'
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

            'nama_lengkap_ketua.required'  => 'nama lengkap ketua harus diisi!!',
            'nama_lengkap_ketua.min'    => 'nama lengkap ketua minimal 3 karakter',
            'nama_lengkap_ketua.max'    => 'nama lengkap ketua maksimal 20 karakter',

            'tempat_lahir_ketua.required'   => 'tempat lahir ketua harus diisi!!',
            'tempat_lahir_ketua.min'    => 'tempat lahir ketua minimal 3 karakter',

            'tanggal_lahir_ketua.required'   => 'tanggal lahir ketua harus diisi!!',

            'alamat_ketua.required'     => 'alamat ketua harus diisi!!',
            'alamat_ketua.min'  => 'alamat ketua minimal 3 karakter',

            'no_telp_ketua.required'    => 'no telp ketua harus diisi!!',
            'no_telp_ketua.min' => 'no telp ketua minimal 10 angka',
            'no_telp_ketua.max' => 'no telp ketua maksimal 13 angka',

            'nama_lengkap_anggota.min' =>  'nama lengkap anggota minimal 3 karakter',
            'nama_lengkap_anggota.max'  => 'nama lengkap anggota maksimal 20 karakter',

            'tempat_lahir_anggota'  => 'tempat lahir anggota mininmal 3 karakter',

            'alamat_anggota'    => 'alamat naggota minimal 3 karakter',

            'no_telp_anggota.min' => 'no telp anggota minimal 10 angka',
            'no_telp_anggota.max' => 'no telp anggota maksimal 13 angka',
        ];
        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails())
        {
            // return response()->json($req->no_telp);
            // return response()->json('gagal');
            return Redirect::back()->withInput()->withErrors($validator);
        }
        $idUsers = $req->id_users;
        $team = Teams::where('id_users', $idUsers)->first();
        if (empty($team)){
            if ($req->nama_lengkap_anggota == '' && $req->tempat_lahir_anggota == '' && $req->tanggal_lahir_anggota == '' &&
                $req->alamat_anggota == '' && $req->no_telp_anggota == ''){

                $teamBaru = new Teams();
                $teamBaru->nama_team = $req->nama_team;
                $teamBaru->kota = $req->kota;
                $teamBaru->asal_sekolah = $req->asal_sekolah;
                if ($req->nama_pembina !== ''){
                    $teamBaru->nama_pembina = $req->nama_pembina;
                }
                if ($req->no_telp_pembina !== ''){
                    $teamBaru->no_telp_pembina = $req->no_telp_pembina;
                }
                $teamBaru->id_users = $idUsers;
                $teamBaru->save();
                $ketua = new Participans();
                $ketua->nama_lengkap = $req->nama_lengkap_ketua;
                $ketua->tempat_lahir = $req->tempat_lahir_ketua;
                $ketua->tanggal_lahir = $req->tanggal_lahir_ketua;
                $ketua->alamat = $req->alamat_ketua;
                $ketua->no_telp = $req->no_telp_ketua;
                $ketua->id_teams = $teamBaru->id;
                $ketua->save();

            } else if ($req->nama_lengkap_anggota != '' && $req->tempat_lahir_anggota != '' && $req->tanggal_lahir_anggota != '' &&
                $req->alamat_anggota != '' && $req->no_telp_anggota != ''){

                $teamBaru = new Teams();
                $teamBaru->nama_team = $req->nama_team;
                $teamBaru->kota = $req->kota;
                $teamBaru->asal_sekolah = $req->asal_sekolah;
                if ($req->nama_pembina !== ''){
                    $teamBaru->nama_pembina = $req->nama_pembina;
                }
                if ($req->no_telp_pembina !== ''){
                    $teamBaru->no_telp_pembina = $req->no_telp_pembina;
                }
                $teamBaru->id_users = $idUsers;
                $teamBaru->save();
                $ketua = new Participans();
                $ketua->nama_lengkap = $req->nama_lengkap_ketua;
                $ketua->tempat_lahir = $req->tempat_lahir_ketua;
                $ketua->tanggal_lahir = $req->tanggal_lahir_ketua;
                $ketua->alamat = $req->alamat_ketua;
                $ketua->no_telp = $req->no_telp_ketua;
                $ketua->id_teams = $teamBaru->id;
                $ketua->save();

                $anggota = new Participans();
                $anggota->nama_lengkap = $req->nama_lengkap_anggota;
                $anggota->tempat_lahir = $req->tempat_lahir_anggota;
                $anggota->tanggal_lahir = $req->tanggal_lahir_anggota;
                $anggota->alamat = $req->alamat_anggota;
                $anggota->no_telp = $req->no_telp_anggota;
                $anggota->id_teams = $teamBaru->id;
                $anggota->save();

            } else {
                $message = [
                    'nama_team'  => 'jika ingin menambah anggota data harus dilengkapi!!'
                ];
                return Redirect::back()->withInput()->withErrors($message);
            }

            return redirect('/alpro/dashboard');
        } else {
            return redirect('/alpro/dashboard');
        }
    }

}
