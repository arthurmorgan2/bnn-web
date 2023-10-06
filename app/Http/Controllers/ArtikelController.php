<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function index(Artikel $post)
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('admin/artikel/main-artikel', compact('artikel', 'kategori'));
    }

    public function createPage()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('admin/artikel/create-artikel', compact('artikel', 'kategori'));
    }
    public function updatePage($id)
    {
        // $artikel = Artikel::all();
        $kategori = Kategori::all();
        $artikel = Artikel::select('*')
            ->where('id', $id)
            ->get();
        return view('admin/artikel/update-artikel', compact('artikel', 'kategori'));
    }

    public function store(Request $request)
    {
        Alert::toast('Artikel Berita Berhasil Ditambahkan!', 'success');

        $this->validate($request, [
            'judul' => 'required|max:100',
            'body' => 'required|max:2000',
            'gambar_artikel' => 'required|max:20000',
        ]);

        $data = [];

        if ($request->has('gambar_artikel')) {
            $data = $request->all();
            $data['slug'] = Str::slug($request->judul);
            $data['body'] = strip_tags($request->body);
            $data['user_id'] = Auth::id();
            $data['views'] = 0;
            $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

            Artikel::create($data);
        } else {
            $data = $request->all();
            $data['slug'] = Str::slug($request->judul);
            $data['body'] = strip_tags($request->body);
            $data['user_id'] = Auth::id();
            $data['views'] = 0;

            Artikel::create($data);
        }

        return redirect('/artikel')->with('toast');
    }

    public function edit(Request $request, $id)
    {
        Alert::toast('Artikel Berita Berhasil Diubah!', 'success');
        $artikel = Artikel::find($id);
        if (empty($request->file('gambar_artikel'))) {

            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
            ]);
        } else if ($artikel->gambar_artikel == null) {
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel')
            ]);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel')
            ]);
        }
        return redirect('/artikel')->with('toast');
    }

    public function destroy($id = null)
    {
        Alert::toast('Artikel Berita Berhasil Dihapus!', 'success');
        $artikel = Artikel::find($id);

        if ($artikel->gambar_artikel) {
            Storage::delete($artikel->gambar_artikel);
            Artikel::where(['id' => $id])->delete();
        } else {
            Artikel::where(['id' => $id])->delete();
        }

        return redirect()->back()->with('toast');
    }
}
