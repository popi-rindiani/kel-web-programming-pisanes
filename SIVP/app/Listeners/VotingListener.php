<?php

namespace App\Listeners;

use App\Events\VotingEvent;
use Illuminate\Support\Facades\DB;

class VotingListener
{
    public function handle(VotingEvent $event)
    {
        // Ambil data dari event
        $calon_id = $event->calon_id;
        $kategori_voting = $event->kategori_voting;  // Nama kategori (RT/RW)
        
        // Ambil ID kategori_voting berdasarkan nama kategori
        $kategori_voting_id = DB::table('kategori_voting')
            ->where('nama_kategori', $kategori_voting)
            ->value('id');
        
        // Periksa apakah data sudah ada di tabel hasil_voting
        $hasilVoting = DB::table('hasil_voting')
            ->where('calon_id', $calon_id)
            ->where('kategori_voting_id', $kategori_voting_id)  // Menggunakan kategori_voting_id
            ->first();
    
        if ($hasilVoting) {
            // Jika sudah ada, tambahkan jumlah suara
            DB::table('hasil_voting')
                ->where('calon_id', $calon_id)
                ->where('kategori_voting_id', $kategori_voting_id)  // Menggunakan kategori_voting_id
                ->update(['jumlah_suara' => DB::raw('jumlah_suara + 1')]);
        } else {
            // Jika belum ada, buat entri baru di hasil_voting
            DB::table('hasil_voting')->insert([
                'kategori_voting_id' => $kategori_voting_id,  // Menyimpan kategori_voting_id
                'calon_id' => $calon_id,
                'jumlah_suara' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    
}
