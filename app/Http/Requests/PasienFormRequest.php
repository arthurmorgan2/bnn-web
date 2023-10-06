<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|max:16',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat_lengkap' => 'required|max:500',
            'agama' => 'required',
            'golongan_darah' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email:dns',
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap.required' => 'Tolong isi nama lengkap anda.',
            'nama_lengkap.max' => 'Nama lengkap anda terlalu  panjang.',
            'nik.required' => 'Tolong isi Nomor Induk Keluarga Anda.',
            'nik.min' => 'Nomor Induk Keluaga anda belum lengkap.',
            'tempat_lahir.required' => 'Tolong isi tempat lahir anda.',
            'tanggal_lahir.required' => 'Tolong isi tanggal lahir anda.',
            'jenis_kelamin.required' => 'Tolong isi jenis kelamin anda.',
            'alamat_lengkap.required' => 'Tolong isi alamat lengkap anda.',
            'agama.required' => 'Tolong isi agama anda.',
            'golongan_darah.required' => 'Tolong isi golongan darah anda.',
            'no_wa.required' => 'Tolong isi nomor WA anda.',
            'email.required' => 'Tolong Isi Email Anda.',
            'email.email' => 'Tolong isikan email yang valid.',
        ];
    }
}
