@extends('layouts.client.main')
@section('content')
    <section class="news-content">
        {{-- Detail Berita Section --}}
        <div class="container">
            <div class="row d-flex flex-column align-items-center justify-content-center">
                <div class="col-md-8">
                    <div class="content-title-detail fw-bold text-center">{{ $artikel->judul }}</div>
                    <div class="row content-title-desc justify-content-center align-items-center">
                        <div class="col-md-4 col-3 d-flex justify-content-center">Dibaca : {{ $artikel->views }}</div>
                        <div class="col-md-4 col-3 d-flex justify-content-center">Oleh : {{ $artikel->users->name }}</div>
                        <div class="col-md-4 col-3 d-flex justify-content-center">
                            {{ date('d M Y', strtotime($artikel->created_at)) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 d-flex justify-content-center">
                    <div class="content-images d-flex justify-content-center">
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
                    <div class="post-description-detail">
                        {!! nl2br($artikel->body) !!}

                    </div>
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
            <div class="row d-flex justify-content-center align-items-top">
                @foreach ($post_populer as $item)
                    <div class="col-md-3 col-6">
                        <a href="{{ url('/berita/' . $item->slug) }}">
                            <div class="card card-populer shadow">
                                <div class="row">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                            class="card-news-img-populer mt-4 rounded-5" alt="Gambar Artikel" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-news-title-populer">{{ Str::words($item->judul, 5, ' ...') }}</div>
                                    <div class="post-views mt-2"> <i class="fa-solid fa-eye"></i> <span
                                            class="fw-bold">{{ $item->views }}</span>
                                        Kali Dibaca</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
