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
        Schema::table('calon', function (Blueprint $table) {
            $table->unsignedBigInteger('kategori_voting_id')->nullable(); // Add nullable if it's optional
            $table->foreign('kategori_voting_id')->references('id')->on('kategori_voting')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calon', function (Blueprint $table) {
            $table->dropForeign(['kategori_voting_id']);
            $table->dropColumn('kategori_voting_id');
        });
    }
};
