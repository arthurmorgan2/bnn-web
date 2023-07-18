<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;


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

    public function formDaftar()
    {
        return view('client/pendaftaran-online');
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
