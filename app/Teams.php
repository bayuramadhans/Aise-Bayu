<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Participans;

class Teams extends Model {
    protected $fillable = [
        'nama_team', 'kota', 'asal_sekolah', 'nama_pembina', 'no_telp_pembina', 'bukti_pembayaran', 'status', 'id_users'
    ];

    public function Users(){
        return $this->hasMany('App\User', 'id', 'id_users');
    }

    public function Participans(){
        return $this->hasMany('App\Participans', 'id_teams', 'id_teams');
    }
}

?>
