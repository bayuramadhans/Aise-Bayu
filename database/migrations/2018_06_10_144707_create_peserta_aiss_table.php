<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertaAissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_aiss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->text('token');
            $table->string('no_telp');
            $table->text('asal_institusi');
            $table->text('bukti_pembayaran');
            $table->tinyint('status');
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
        Schema::dropIfExists('peserta_aiss');
    }
}
