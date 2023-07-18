@extends('layouts.client.main')
@section('content')
    <section class="news-content">
        {{-- Detail Berita Section --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-title-detail fw-bold text-center">{{ $artikel->judul }}</div>
                    <div class="row content-title-underline justify-content-md-center">
                        <div class="col-md-auto d-flex justify-content-center">Dibaca : {{ $artikel->views }}</div>
                        <div class="col-md-auto d-flex justify-content-center">Oleh : {{ $artikel->users->name }}</div>
                        <div class="col-md-auto d-flex justify-content-center">
                            {{ date('d M Y', strtotime($artikel->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 p-5 d-flex justify-content-center">
                    <div class="thumbnail w-50">
                        <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt="hahaha"
                            class="img-fluid img-thumbnail rounded">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center p-2">
                    #BNN #StopNarkoba #CegahNarkoba
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-auto text-justify p-4">
                    {{ strip_tags(preg_replace('/&#?[a-z0-9]{2,8};/i', '', $artikel->body)) }}
                </div>
            </div>

            {{-- Berita Populer Section --}}
            <div class="row">
                <div class="col-md-12">
                    <h3 class="content-title-2 text-center p-3 m-0">Berita <span
                            class="populer-underline rounded">Populer</span>
                    </h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach ($post_populer as $item)
                    <div class="col-sm-2">
                        <div class="card-populer">
                            <div class="card m-0">
                                <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" class="card-img-top"
                                    alt="Gambar Artikel" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p class="card-text">
                                        {{ Str::words($item->body, 5, ' ...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
