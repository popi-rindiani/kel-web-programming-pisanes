<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalonRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_calon' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'status' => 'required|in:0,1', // Status 0 untuk tidak aktif, 1 untuk aktif
        ];
    }

    public function messages()
    {
        return [
            'nama_calon.required' => 'Nama Calon wajib diisi.',
            'kategori.required' => 'Kategori wajib diisi.',
            'status.required' => 'Status wajib diisi.',
            'status.in' => 'Status harus salah satu dari nilai berikut: 0 atau 1.',
        ];
    }
}
