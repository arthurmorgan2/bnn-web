@extends('layouts.client.main')


@section('content')
    {{-- Pendaftaran Online Content --}}
    <section class="pendaftaran-content">

        <div class="container-fluid">
            <div class="row p-4">
                <div class="col-12">
                    <div class="title text-center fw-bold">
                        <span class="pendaftaran-online-underline">Pendaftaran Online</span> Pasien BNN Klinik Sleman
                    </div>
                </div>
            </div>
            {{-- Form Content --}}
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        {{-- Form Pendaftaran Content --}}
                        <form action="POST">
                            <div class="row mb-4">
                                <div class="col-4  d-flex justify-content-left align-items-center">
                                    <div class="label">Nomor Induk Keluarga</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline">
                                        <input type="number" id="form6Example1" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4  d-flex justify-content-left align-items-center">
                                    <div class="label">Nama Lengkap</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example1" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4  d-flex justify-content-left align-items-center">
                                    <div class="label">Jenis Kelamin</div>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4  d-flex justify-content-left align-items-center">
                                    <div class="label">Nomor WA Aktif</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline input-group">
                                        <div class="input-group-text">+62</div>
                                        <input type="number" id="form6Example1" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4  d-flex justify-content-left align-items-center">
                                    <div class="label">Email</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="email" id="form6Example1" class="form-control" />
                                        <label class="form-label" for="form2Example1">humasbnnksleman@gmail.com</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="row">
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
                                </div>
                                <div class="col-3">
                                    <a href="/" class="btn btn-warning btn-block mb-4">Kembali</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-6 bg-success">
                        Layanan Content
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
