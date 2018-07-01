<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller {
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function loginApi(Request $req){
        $validator = $this->validator($req->all());
        if($validator->fails()){
            return response()->json(array(
                'fail' => true,
                'message' => $validator->getMessageBag()->toArray()
            ));
        }else{
            $user = User::where('email', $req->email)->first();
            if(!empty($user)){
                // if($req->email=='adminalpro2017@unair.co.id'){
                //
                // }else{
                //
                // }
                if ($user->confirmed != 1){
                    $message = "Harus verifikasi email terlebih dahulu";
                    return response()->json(['error'=>true, 'message' => $message]);
                }

                if(Hash::check($req->password, $user->password)){
                    return response()->json($user);
                }else{
                    //invalidEmailOrrPass
                    $message = "E-mail atau Password yang anda masukkan salah";
                    return response()->json(['error'=>true, 'message' => $message]);
                }
            }else{
                //invalidEmailOrrPass
                $message = "E-mail atau Password yang anda masukkan salah";
                return response()->json(['error'=>true, 'message' => $message]);
            }
        }
    }

    public function showLogin(){
        if (Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
            flash('This admin')->success();
        } else if (Auth::guard('peserta')->check()){
            return redirect('/alpro/dashboard');
            flash('This peserta')->success();
        }
        return view('login');
    }

    public function login(Request $req){
        $message = [
            'email.required'    => 'email harus diisi',
            'email.email'   => 'format email tidak benar',
            'password.required' => 'password harus diisi',
        ];

        $validator = $this->validator($req->all(), $message);

        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            $user = User::where('email', $req->email)->first();
            if(!empty($user)){
                // if($req->email=='adminalpro2017@unair.co.id'){
                //
                // }else{
                //
                // }
                if ($user->confirmed != 1){
                    $message = "harus verifikasi email terlebih dahulu, silahkan cek email anda";
                    flash($message)->error();
                    return redirect('masuk');
                }

                if(Hash::check($req->password, $user->password)){
                    //userFound
                    if($req->email=='hogivano@gmail.com'){
                        //Admin
                        Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password], $req->has('remember'));
                        // return response()->json(['success'=>true, 'message' => 'admin']);
                        return redirect('/admin/dashboard');
                    }else{
                        //User
                        Auth::guard('peserta')->attempt(['email' => $req->email, 'password' => $req->password], $req->has('remember'));
                        // return response()->json(['success'=>true]);
                        return redirect('/alpro/dashboard');
                    }
                }else{
                    //invalidEmailOrrPass
                    $errors = [
                        'password' => 'Email atau password yang anda masukan salah'
                    ];
                    return Redirect::back()->withInput()->withErrors($errors);
                    // $message = "E-mail atau Password yang anda masukkan salah";
                    // return response()->json(['error'=>true, 'message' => $message]);
                }
            }else{
                //invalidEmailOrrPass
                $errors = [
                    'password' => 'Email atau password yang anda masukan salah'
                ];
                return Redirect::back()->withInput()->withErrors($errors);
                // $message = "E-mail atau Password yang anda masukkan salah";
                // return response()->json(['error'=>true, 'message' => $message]);
            }
        }
    }

    public function validator(array $data, $message){
      $rules = [
        'email'     => 'required|string|email',
        'password'  => 'required|string',
      ];
      return Validator::make($data,$rules, $message);
    }

    // public function logout(){
    //   $this->guard()->logout();
    //   // $request->session()->flush();
    //   //
    //   // $request->session()->regenerate();
    //   return redirect('/masuk');
    // }

    public function pesertaLogout(){
        Auth::guard('peserta')->logout();
        return redirect('/masuk');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
