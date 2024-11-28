<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilihTable extends Migration
{
    public function up()
    {
        Schema::create('pemilih', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilih');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email')->unique();
            $table->enum('status_voting', ['sudah', 'belum'])->default('belum');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilih');
    }
}
