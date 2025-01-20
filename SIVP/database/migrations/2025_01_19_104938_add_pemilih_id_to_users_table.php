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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('pemilih_id')->nullable()->after('id'); // Menambahkan kolom pemilih_id
            $table->foreign('pemilih_id')->references('id')->on('pemilih')->onDelete('cascade'); // Menambahkan foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['pemilih_id']); // Menghapus foreign key
            $table->dropColumn('pemilih_id'); // Menghapus kolom pemilih_id
        });
    }
};
