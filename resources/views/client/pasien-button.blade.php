@extends('layouts.client.main')


@section('content')
    {{-- Pendaftaran Online Content --}}
    <section class="pendaftaran-content">

        <div class="container-fluid">
            <div class="row p-4">
                <div class="col-md-12">
                    <div class="title text-center fw-bold">
                        <span class="pendaftaran-online-underline">Pendaftaran Online</span> Pasien BNN Klinik Sleman
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row p-4 d-flex align-items-center justify-content-md-center">
                    <div class="col-md-12 col-12 d-flex justify-content-center">
                        <div class="button pasienBaru rounded-3">
                            <div class="row icon">
                                <div class="col d-flex justify-content-center p-3">
                                    <i class="fa-solid fa-notes-medical fa-5x" style="color:#036;"></i>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col fw-bold text-center label">
                                    <p>Pendaftaran pasien baru di Klinik Badan Narkotika Nasional Sleman</p>
                                </div>
                            </div>

                            <div class="row p-2">
                                <div class="col d-flex justify-content-center">
                                    <a href="/pendaftaran-online/pasienbaru" type="button" class="btn btn-warning"
                                        style="color: white">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5 col-12 d-flex justify-content-center">
                        <div class="button pasienLama rounded-3">
                            <div class="row icon">
                                <div class="col d-flex justify-content-center p-3">
                                    <i class="fa-solid fa-house-medical-circle-check fa-5x" style="color: #036;"></i>
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col fw-bold text-center label">
                                    <p>Pendaftaran pasien lama di Klinik Badan Narkotika Nasional Sleman</p>
                                </div>
                            </div>

                            <div class="row p-2">
                                <div class="col d-flex justify-content-center">
                                    <a href="/pendaftaran-online/pasienlama" type="button"
                                        class="btn btn-warning ">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </section>
@endsection
