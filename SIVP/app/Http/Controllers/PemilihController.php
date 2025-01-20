<?php


namespace App\Http\Controllers;

use App\Models\Pemilih;
use Illuminate\Http\Request;

class PemilihController extends Controller
{
    // public function index()
    // {
    //     $pemilih = Pemilih::all();
    //     return view('pemilih.index', compact('pemilih'));
    // }

    public function index()
    {
        $pemilih = Pemilih::leftJoin('voting', 'pemilih.id', '=', 'voting.pemilih_id')
            ->select('pemilih.*', 'voting.pemilih_id as voting_pemilih_id')
            ->get();
    
        return view('pemilih.index', compact('pemilih'));
    }


    public function vote(Request $request)
    {
        // Pastikan pemilih_id ada
        $pemilih_id = $request->input('pemilih_id');
        $pemilih = Pemilih::findOrFail($pemilih_id);
    
        // Periksa apakah pemilih sudah melakukan voting
        if ($pemilih->status_voting === 'sudah') {
            return redirect()->route('pemilih.index')->with('warning', 'Pemilih ini sudah melakukan voting.');
        }
    
        // Proses voting
        // Misalnya Anda menyimpan pilihan calon yang dipilih
        $calon_id = $request->input('calon_id');
        // Simpan pilihan voting atau lakukan update sesuai kebutuhan
    
        // Update status voting
        $pemilih->update(['status_voting' => 'sudah']);
    
        return redirect()->route('pemilih.index')->with('success', 'Voting berhasil dilakukan.');
    }
    
    
    

    public function create()
    {
        return view('pemilih.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilih' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email|unique:pemilih',
            'status_voting' => 'required|in:sudah,belum',
        ]);

        Pemilih::create($request->all());
        return redirect()->route('pemilih.index')->with('success', 'Data pemilih berhasil ditambahkan.');
    }

    public function show(Pemilih $pemilih)
    {
        return view('pemilih.show', compact('pemilih'));
    }

    public function edit(Pemilih $pemilih)
    {
        return view('pemilih.edit', compact('pemilih'));
    }

    public function update(Request $request, Pemilih $pemilih)
    {
        $request->validate([
            'nama_pemilih' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email|unique:pemilih,email,' . $pemilih->id,
            'status_voting' => 'required|in:sudah,belum',
        ]);

        $pemilih->update($request->all());
        return redirect()->route('pemilih.index')->with('success', 'Data pemilih berhasil diperbarui.');
    }

    public function destroy(Pemilih $pemilih)
    {
        $pemilih->delete();
        return redirect()->route('pemilih.index')->with('success', 'Data pemilih berhasil dihapus.');
    }
}
