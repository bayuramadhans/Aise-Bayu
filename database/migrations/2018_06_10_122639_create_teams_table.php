<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id_teams');
            $table->string('nama_team');
            $table->text('kota');
            $table->text('asal_sekolah');
            $table->string('nama_pembina');
            $table->string('no_telp_pembina');
            $table->text('bukti_pembayaran');
            $table->tinyint('status')->default(0);
            $table->foreign('id_users')->reference('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
