<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set to false jika ingin membatasi akses
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:6|confirmed', // Validasi konfirmasi password
            'role' => 'required|in:admin,masyarakat', // Role hanya boleh admin atau masyarakat
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Pengguna wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus memiliki minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
            'role.required' => 'Role wajib dipilih.',
            'role.in' => 'Role harus salah satu dari: admin atau masyarakat.',
        ];
    }
}
