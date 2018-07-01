<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaAiss extends Model
{
    public $table = 'peserta_aiss';
    //
    protected $fillable = [
        'nama_lengkap', 'email', 'token', 'no_telp', 'asal_institusi', 'bukti_pembayaran', 'status'
    ];
}
