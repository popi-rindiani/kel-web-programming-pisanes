<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'setting_name' => 'required|string|max:255',
            'setting_value' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'setting_name.required' => 'Nama Pengaturan wajib diisi.',
            'setting_value.required' => 'Nilai Pengaturan wajib diisi.',
        ];
    }
}
