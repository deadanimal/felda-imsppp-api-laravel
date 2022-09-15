<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peserta', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('wilayah');
            $table->string('rancangan');
            $table->string('felda');
            $table->string('alamatTetap');
            $table->string('kadPengenalan');
            $table->string('statusPeserta')->nullable();
            $table->date('tarikhLahir')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->double('pendapatanBulanan')->nullable();
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
};
