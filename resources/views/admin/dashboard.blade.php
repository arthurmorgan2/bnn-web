@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Dashboard</h1>
                    </div>
                </div>
                <hr>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-4">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $pasien }}</h3>

                                <p>Jumlah Pasien Terdaftar Hari Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <a href="/pasien" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $artikel }}</h3>

                                <p>Jumlah Postingan Artikel Berita</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>
                            <a href="/artikel" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $views }}</h3>

                                <p>Jumlah Pembaca Berita</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <a href="/artikel" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
