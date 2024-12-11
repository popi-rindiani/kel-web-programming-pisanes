<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriVotingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:500',
        ];
    }

    public function messages()
    {
        return [
            'nama_kategori.required' => 'Nama Kategori wajib diisi.',
            'deskripsi.string' => 'Deskripsi harus berupa teks.',
        ];
    }
}
