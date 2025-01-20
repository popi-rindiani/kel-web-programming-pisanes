<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilVotingTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel hasil_voting.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_voting', function (Blueprint $table) {
            $table->id(); // Kolom id (primary key)
            $table->unsignedBigInteger('kategori_voting_id'); // Kolom kategori_voting_id
            $table->unsignedBigInteger('calon_id'); // Kolom calon_id
            $table->integer('jumlah_suara')->default(0); // Kolom jumlah suara
            $table->timestamps(); // Kolom created_at dan updated_at

            // Menambahkan foreign key untuk kategori_voting_id dan calon_id
            $table->foreign('kategori_voting_id')
                ->references('id')
                ->on('kategori_voting') // Menunjuk ke tabel kategori_voting
                ->onDelete('cascade'); // Menghapus data jika kategori_voting dihapus

            $table->foreign('calon_id')
                ->references('id')
                ->on('calon') // Menunjuk ke tabel calon
                ->onDelete('cascade'); // Menghapus data jika calon dihapus
        });
    }

    /**
     * Membalikkan migrasi (rollback) dengan menghapus tabel hasil_voting.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_voting');
    }
}
