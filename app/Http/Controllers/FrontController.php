<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Foto;
use App\Models\Video;
use App\Models\PasienBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\PasienFormRequest;

class FrontController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $artikel = Artikel::latest()->paginate(4);
        $post_populer = Artikel::orderBy('views', 'desc')->limit('2')->get();
        $kategori = Kategori::all();
        return view('client/index', compact('artikel', 'kategori', 'post_populer'));
    }

    public function ajaxPaginate(Request $request)
    {
        Paginator::useBootstrap();
        $artikel = Artikel::latest()->paginate(2);
        return view('layouts/client/pagination', compact('artikel'))->render();
    }

    public function showLayanan(Request $request)
    {
        return view('client/layanan');
    }
    public function showGallery(Request $request)
    {
        $foto = Foto::all();
        $video = Video::all();
        return view('client/gallery', compact('foto', 'video'));
    }

    public function pasienLink()
    {
        return view('client/pasien-button');
    }

    public function PasienBaruShow()
    {
        return view('client/pasien-baru');
    }

    public function PasienBaruCreate(PasienFormRequest $request)
    {
        Alert::toast('Data Pasien Berhasil Ditambahkan', 'success');

        $pasien_validation =  [
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

        $pasienMessage = [
            'nama_lengkap.required' => 'Tolong isi nama lengkap anda.',
            'nama_lengkap.max' => 'Nama lengkap anda terlalu  panjang.',
            'nik.required' => 'Tolong isi Nomor Induk Keluarga Anda.',
            'nik.unique' => 'Nomor Induk Keluarga Anda Sudah Digunakan.',
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

        $validator = Validator::make($request->all(), $pasien_validation, $pasienMessage);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        PasienBaru::create($request->all());

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
