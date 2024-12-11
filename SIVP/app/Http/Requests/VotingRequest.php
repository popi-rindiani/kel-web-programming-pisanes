<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VotingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pemilih_id' => 'required|exists:pemilih,id', // Pastikan ID pemilih ada di tabel pemilih
            'calon_id' => 'required|exists:calon,id', // Pastikan ID calon ada di tabel calon
            'kategori_voting' => 'required|string|max:100',
            'status_voting' => 'required|in:0,1', // 0 untuk gagal, 1 untuk sukses
        ];
    }

    public function messages()
    {
        return [
            'pemilih_id.required' => 'Pemilih wajib dipilih.',
            'calon_id.required' => 'Calon wajib dipilih.',
            'kategori_voting.required' => 'Kategori voting wajib diisi.',
            'status_voting.required' => 'Status voting wajib diisi.',
        ];
    }
}
