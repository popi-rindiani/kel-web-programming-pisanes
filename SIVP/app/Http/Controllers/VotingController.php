<?php
namespace App\Http\Controllers;

use App\Models\Calon;
use App\Models\Voting;
use App\Models\KategoriVoting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\VotingEvent;

class VotingController extends Controller
{
    // Menampilkan form voting
    public function index()
    {
        // Mengambil semua data calon untuk ditampilkan di form
        $calons = Calon::all();

        // Kirimkan data calon ke view
        return view('voting.voting', compact('calons'));
    }

    // Menangani voting
        // Menangani voting
    public function vote(Request $request)
    {
        // Validasi input pemilih_id dan kategori_voting
        $validated = $request->validate([
            'pemilih_id' => 'required|exists:pemilih,id',
            'kategori_voting' => 'required|in:RT,RW',
            'calon_id' => 'required|exists:calon,id',
        ]);

        // Tentukan kategori_voting_id berdasarkan kategori_voting yang dipilih
        $kategori_voting_id = DB::table('kategori_voting')
            ->where('kategori', $validated['kategori_voting'])
            ->value('id');

        // Periksa jika pemilih sudah memilih
        $existingVote = DB::table('voting')
            ->where('pemilih_id', $validated['pemilih_id'])
            ->where('kategori_voting', $validated['kategori_voting'])
            ->first();

        if ($existingVote) {
            return redirect()->back()->with('error', 'Anda sudah memberikan suara di kategori ini.');
        }

        // Masukkan data ke tabel voting
        DB::table('voting')->insert([
            'pemilih_id' => $validated['pemilih_id'],
            'kategori_voting_id' => $kategori_voting_id,  // Tambahkan kategori_voting_id
            'kategori_voting' => $validated['kategori_voting'],
            'calon_id' => $validated['calon_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Update jumlah suara di tabel hasil_voting
        $hasilVoting = DB::table('hasil_voting')
            ->where('kategori_voting_id', $kategori_voting_id)
            ->where('calon_id', $validated['calon_id'])
            ->first();

        if ($hasilVoting) {
            // Jika sudah ada hasil voting, increment jumlah suara
            DB::table('hasil_voting')
                ->where('kategori_voting_id', $kategori_voting_id)
                ->where('calon_id', $validated['calon_id'])
                ->increment('jumlah_suara');
        } else {
            // Jika belum ada hasil voting, buat entri baru
            DB::table('hasil_voting')->insert([
                'kategori_voting_id' => $kategori_voting_id,
                'calon_id' => $validated['calon_id'],
                'jumlah_suara' => 1, // Suara pertama
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

         // Panggil event VotingEvent untuk memicu listener
    event(new VotingEvent($validated['pemilih_id'], $validated['kategori_voting'], $validated['calon_id']));

        return redirect()->back()->with('success', 'Terima kasih telah memilih!');
    }

}
