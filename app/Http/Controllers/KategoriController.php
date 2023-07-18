<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin/artikel/main-kategori', compact('kategori'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Alert::toast('Kategori Artikel Berita Berhasil Ditambahkan!', 'success');
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        return redirect()->back()->with('toast');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        Alert::toast('Kategori Artikel Berita Berhasil Diubah!', 'success');
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        // dd($data);

        Kategori::where(['id' => $id])->update(['nama_kategori' => $data['nama_kategori'], 'slug' => $data['slug']]);

        return redirect()->back()->with('toast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id = null)
    {
        // $artikel = Artikel::find($id);
        // Storage::delete($artikel->gambar_artikel);
        Kategori::where(['id' => $id])->delete();
        Alert::toast('Kategori Artikel Berita Berhasil Dihapus!', 'success');
        return redirect()->back()->with('toast');
    }
}
