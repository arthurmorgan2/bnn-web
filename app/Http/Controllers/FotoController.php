<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FotoController extends Controller
{

    public function showDataFoto()
    {
        $foto = Foto::all();

        return view('admin/gallery/foto/data-foto', compact('foto'));
    }

    public function create(Request $request)
    {

        Alert::toast('Foto Berhasil Ditambahkan!', 'success');
        $this->validate($request, [
            'deskripsi' => 'required|max:100',
            'kategori_foto' => 'required|max:100',
            'gambar_foto' => 'required|max:20000',

        ]);
        $data = [];

        if ($request->has('gambar_foto')) {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();
            $data['gambar_foto'] = $request->file('gambar_foto')->store('foto');

            Foto::create($data);
        } else {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();

            Foto::create($data);
        }

        return redirect()->back()->with('toast');
    }

    public function update(Request $request, $id)
    {
        Alert::toast('Foto Berhasil Diubah!', 'success');
        $foto = Foto::find($id);
        if (empty($request->file('gambar_foto'))) {

            $foto = Foto::find($id);
            $foto->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_foto' => $request->kategori_foto,
            ]);
        } else if ($foto->gambar_foto == null) {
            $foto = Foto::find($id);
            $foto->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_foto' => $request->kategori_foto,
                'gambar_foto' => $request->file('gambar_foto')->store('foto')
            ]);
        } else {
            $foto = Foto::find($id);
            Storage::delete($foto->gambar_foto);
            $foto->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_foto' => $request->kategori_foto,
                'gambar_foto' => $request->file('gambar_foto')->store('foto')
            ]);
        }
        return redirect()->back()->with('toast');
    }

    public function delete($id = null)
    {
        Alert::toast('Foto Berhasil Dihapus!', 'success');

        $foto = Foto::find($id);

        if ($foto->gambar_foto) {
            Storage::delete($foto->gambar_foto);
            Foto::where(['id' => $id])->delete();
        } else {
            Foto::where(['id' => $id])->delete();
        }

        return redirect()->back()->with('toast');
    }
}
