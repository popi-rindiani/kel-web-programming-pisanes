<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemilihRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set to false jika akses terbatas
    }

    public function rules()
    {
        return [
            'nama_pemilih' => 'required|string|max:255',
            'email' => 'required|email|unique:pemilih,email',
            'status_voting' => 'required|string|max:20',
            'alamat' => 'nullable|string|max:255',
            'no_telepon' => 'nullable|string|max:15',
        ];
    }

    public function messages()
    {
        return [
            'nama_pemilih.required' => 'Nama Pemilih wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email yang dimasukkan tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'status_voting.required' => 'Status voting wajib diisi.',
        ];
    }
}
