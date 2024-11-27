<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingTable extends Migration
{
    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilih_id')->constrained('pemilih')->onDelete('cascade');
            $table->foreignId('calon_id')->constrained('calon')->onDelete('cascade');
            $table->enum('kategori_voting', ['RT', 'RW']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voting');
    }
}
