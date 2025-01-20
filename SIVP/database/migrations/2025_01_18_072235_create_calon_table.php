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
        Schema::create('calon', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon');
            $table->string('foto');
            $table->text('deskripsi');
            $table->enum('kategori', ['RT', 'RW']);
            $table->enum('status', ['aktif', 'non-aktif']);
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
        Schema::dropIfExists('calon');
    }
};
