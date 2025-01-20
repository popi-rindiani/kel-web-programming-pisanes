<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilVotingTable extends Migration
{
    public function up()
    {
        Schema::create('hasil_voting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_voting_id')->constrained('kategori_voting')->onDelete('cascade');
            $table->foreignId('calon_id')->constrained('calon')->onDelete('cascade');
            $table->integer('jumlah_suara')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_voting');
    }
}
