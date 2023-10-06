<?php

namespace App\Http\Controllers;

use App\Models\PasienBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = PasienBaru::all();
        return view('admin/pasien/data-pasien', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        Alert::toast('Data Pasien Berhasil Diubah!', 'success');
        $pasien = PasienBaru::find($id);
        $pasien->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => strip_tags($request->alamat_lengkap),
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'no_wa' => $request->no_wa,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('toast');
    }

    public function delete($id = null)
    {
        Alert::toast('Data Pasien Berhasil Dihapus!', 'success');
        PasienBaru::find($id);
        PasienBaru::where(['id' => $id])->delete();
        return redirect()->back()->with('toast');
    }
}
