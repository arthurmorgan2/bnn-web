<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\PasienBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $artikel = Artikel::latest()->paginate(2);
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();
        $kategori = Kategori::all();
        return view('client/index', compact('artikel', 'kategori', 'post_populer'));
    }

    public function ajaxPaginate(Request $request)
    {
        Paginator::useBootstrap();
        $artikel = Artikel::latest()->paginate(2);
        return view('layouts/client/pagination', compact('artikel'))->render();
    }

    public function pasienLink()
    {
        return view('client/pasien-button');
    }

    public function PasienBaruShow()
    {
        return view('client/pasien-baru');
    }

    public function PasienBaruCreate(Request $request)
    {
        Alert::toast('Data Pasien Berhasil Ditambahkan', 'success');

        $this->validate($request, [
            'nama_lengkap' => 'required|max:100',
            'nik' => 'required|max:16',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat_lengkap' => 'required|max:200',
            'agama' => 'required',
            'golongan_darah' => 'required',
            'no_wa' => 'required',
            'email' => 'required|email:dns',

        ]);

        $data = [];

        $data = $request->all();
        $data['alamat_lengkap'] = strip_tags($request->alamat);
        // $data['no_wa'] = Str::words('+62', $request->no_wa);
        PasienBaru::create($data);

        return redirect('/pendaftaran-online/pasienbaru')->with('toast');
    }

    public function PasienLamaShow()
    {
        return view('client/pasien-lama');
    }


    public function detail_artikel(Request $request, $slug, Artikel $post)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();
        $viewed = Session::get('judul', []);
        if (!in_array($artikel->id, $viewed)) {
            $artikel->increment('views');
            Session::push('judul', $artikel->id);
        }

        return view('/client/detail-berita', compact('artikel', 'viewed', 'post_populer'));
    }
}
