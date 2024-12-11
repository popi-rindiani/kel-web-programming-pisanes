<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'laporan' => 'required|string|max:1000',
            'tanggal' => 'required|date',
            'pemilih_id' => 'required|exists:pemilih,id',
        ];
    }

    public function messages()
    {
        return [
            'laporan.required' => 'Laporan wajib diisi.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'pemilih_id.required' => 'Pemilih wajib dipilih.',
        ];
    }
}
