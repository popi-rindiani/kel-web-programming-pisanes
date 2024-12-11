<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HasilVotingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'calon_id' => 'required|exists:calon,id',
            'pemilih_id' => 'required|exists:pemilih,id',
            'kategori_voting' => 'required|string|max:100',
            'status_voting' => 'required|in:0,1', // 1 sukses, 0 gagal
        ];
    }

    public function messages()
    {
        return [
            'calon_id.required' => 'Calon wajib dipilih.',
            'pemilih_id.required' => 'Pemilih wajib dipilih.',
            'kategori_voting.required' => 'Kategori voting wajib diisi.',
            'status_voting.required' => 'Status voting wajib diisi.',
        ];
    }
}
