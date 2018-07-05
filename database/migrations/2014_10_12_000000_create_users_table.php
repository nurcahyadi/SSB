<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->integer('role')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('pekerjaan_ortu')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('phone')->nullable();
            $table->string('foto')->default('foto/avatar.png');
            $table->string('alamat_rumah')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('asal_ssb')->nullable();
            $table->string('gol_darah')->nullable();
            $table->integer('tinggi')->nullable();
            $table->integer('berat')->nullable();
            $table->string('penyakit')->nullable();
            $table->string('NISN')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
