<?php

use App\PesertaAiss;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@landing');
Route::get('/data-salah', function(){
    $aiss = PesertaAiss::where('id', 5)->first();
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

    return view('email.data_salah_aiss', compact('code'));
});

//daftar Aiss
Route::get('/daftar-aiss', 'SignUpController@showRegisterAiss')->name('daftarAiss');
Route::post('/daftar-aiss', 'SignUpController@storeAiss')->name('store.aiss');

//daftar Alpro
Route::get('/daftar', 'SignUpController@showRegisterAlpro')->name('daftar');
Route::post('/daftar', 'SignUpController@store')->name('store.users');

//masuk
Route::get('/masuk', 'LoginController@showLogin')->name('masuk');
Route::post('/masuk', 'LoginController@login')->name('masuk.users');

//verifikasiEmail
Route::get('/daftar/verify/{code}', 'SignUpController@verifikasiEmail')->name('mail.verify');

//resetPassword
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('resetPass.form');
Route::post('/password/reset', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('resetPass.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('changePass.form');
Route::post('/password/reset/{token}', 'Auth\ResetPasswordController@reset')->name('changePass.email');

//AISS
Route::group(['prefix' => 'aiss'], function () {
    //image show
    Route::get('bukti/{token}', 'PesertaAissController@showBuktiAiss')->name('bukti.aiss.show');

    //Edit Aiss
    Route::get('edit/{token}', 'PesertaAissController@editFromToken')->name('edit.aiss.show');
    Route::post('edit/{token}', 'PesertaAissController@updateFromToken')->name('edit.aiss.update');
});

//Peserta Alpro
Route::group(['prefix' => 'alpro'], function () {
    Route::get('dashboard', 'PesertaAlproController@dashboard_view')->name('dashboard.peserta.show');
    Route::post('dashboard/create', 'PesertaAlproController@createTeamBaru')->name('create.team');
    Route::get('dashboard/update', 'PesertaAlproController@dashboard_form')->name('dashboard.alpro.update');
    Route::post('dashboard/update/post', 'PesertaAlproController@dashboard_form_post')->name('dashboard.alpro.update.post');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', 'AdminController@dashboardShow')->name('dashboard.admin.show');

    //AISS
    Route::get('aiss', 'AissController@listAiss')->name('admin.aiss.index');
    Route::get('/aiss/bukti/{id}', 'AissController@showBuktiAiss')->name('bukti.aiss');

    //Edit AISS
    Route::get('aiss/peserta/edit/{id}', 'AissController@editPesertaShow')->name('admin.aiss.peserta.edit.show');
    Route::post('aiss/peserta/edit/{id}', 'AissController@updatePeserta')->name('admin.aiss.peserta.update');

    //Email AISS
    Route::get('/aiss/verifikasi-email/{id}', 'AissController@verifikasiEmail')->name('verifikasi.email.aiss');
    Route::get('/aiss/buktisalah-email/{id}', 'AissController@buktiSalahEmail')->name('buktisalah.email.aiss');
    Route::get('/aiss/datasalah-email/{id}', 'AissController@dataSalahEmail')->name('datasalah.email.aiss');


    //ALPRO
    Route::get('alpro', 'AdminController@listTeam')->name('admin.alpro.index');

    //Edit Participan
    Route::get('alpro/participan/edit/{id}', 'AdminController@participanEditShow')->name('participan.edit.show');
    Route::post('alpro/participan/edit/{id}', 'AdminController@participanUpdate')->name('participan.update');

    //Edit Team
    Route::get('alpro/team/edit/{id}', 'AdminController@teamEditShow')->name('team.edit.show');
    Route::post('alpro/team/edit/{id}', 'AdminController@teamUpdate')->name('team.update');

    //User
    Route::get('alpro/users', 'AdminController@usersShow')->name('alpro.users.show');

    //Editing Users
    Route::get('alpro/users/edit/{id}', 'AdminController@usersEditShow')->name('alpro.users.edit.show');
    Route::post('alpro/users/edit/{id}', 'AdminController@usersUpdate')->name('alpro.users.update');

    //Email Alpro
    Route::get('alpro/verifikasi-email/{id}', 'AdminController@verifikasiEmailAlpro')->name('verifikasi.email.alpro');
    Route::get('alpro/buktisalah-email/{id}', 'AdminController@buktiSalahEmailAlpro')->name('buktisalah.email.alpro');
    Route::get('alpro/lengkapidata-email/{id}', 'AdminController@lengkapiDataEmailAlpro')->name('lengkapidata.email.alpro');


    Route::get('logout', 'AdminController@adminLogout')->name('admin.logout');
});

//logout
Route::get('/pesertalogout', 'LoginController@pesertaLogout');
