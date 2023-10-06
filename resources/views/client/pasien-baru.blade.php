@extends('layouts.client.main')


@section('content')
    {{-- Pendaftaran Online Content --}}
    <section class="pendaftaran-content">

        <div class="container-fluid">
            <div class="row p-4">
                <div class="col-12">
                    <div class="title text-center fw-bold">
                        <span class="pendaftaran-online-underline">Pendaftaran Online</span> Pasien Baru BNN Klinik Sleman
                    </div>
                </div>
            </div>
            {{-- Form Content --}}
            <div class="container">
                <div class="row p-3">
                    <div class="col-12">
                        {{-- Form Pendaftaran Content --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="error-list">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/pendaftaran-online/pasienbaru/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Nama Lengkap</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <input type="text" name="nama_lengkap" id="[nama_lengkap]"
                                                    class="form-control" autofocus />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Nomor Induk Keluarga</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <input type="number" name="nik" id="nik" class="form-control" />

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Tempat dan Tanggal Lahir</div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-outline">
                                                <input type="text" id="tempat_lahir" name="tempat_lahir"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-outline">
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Jenis Kelamin</div>
                                        </div>

                                        <div class="col-8">
                                            <select class="form-select" aria-label="Default select example"
                                                id="jenis_kelamin" name="jenis_kelamin">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Alamat Lengkap</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <textarea type="text" id="alamat_lengkap" name="alamat_lengkap" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Agama</div>
                                        </div>
                                        <div class="col-8">
                                            <select class="form-select" name="agama" id="agama"
                                                aria-label="Default select example">
                                                <option selected>Pilih Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Golongan Darah</div>
                                        </div>
                                        <div class="col-8">
                                            <select class="form-select" name="golongan_darah" id="golongan_darah"
                                                aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
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
                                                <input type="number" name="no_wa" id="no_wa"
                                                    class="form-control" />
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
                                                <input type="email" id="email" name="email"
                                                    class="form-control" />
                                                <label class="form-label"
                                                    for="form2Example1">humasbnnksleman@gmail.com</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="row justify-content-center">
                                        <div class="col-md-3 col-6">
                                            <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <a href="/" class="btn btn-warning btn-block mb-4">Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
