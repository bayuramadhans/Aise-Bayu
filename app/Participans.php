<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Teams;

class Participans extends Model {
    protected $fillable = [
        'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telp', 'pas_foto', 'foto_ktp', 'id_teams'
    ];

    public function Teams(){
        return $this->belongsTo('App\Teams', 'id_teams', 'id_teams');
    }
}
