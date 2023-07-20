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
                                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                    class="form-control @error('nama') is-invalid @enderror" autofocus
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Nomor Induk Keluarga</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <input type="number" name="nik" id="nik"
                                                    class="form-control @error('nik') is-invalid @enderror" required />
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
                                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-outline">
                                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Jenis Kelamin</div>
                                        </div>

                                        <div class="col-8">
                                            <select class="form-select" aria-label="Default select example" required
                                                id="jenis_kelamin" name="jenis_kelamin">
                                                <option selected>Pilih Jenis Kelamin</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Alamat Lengkap</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <textarea type="text" id="alamat_lengkap" name="alamat_lengkap"
                                                    class="form-control @error('alamat') is-invalid @enderror" required></textarea>
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
                                            <select class="form-select @error('golongan_darah') is-invalid @enderror"
                                                name="agama" id="agama" aria-label="Default select example" required>
                                                <option selected>Pilih Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="2">Hindu</option>
                                                <option value="3">Buddha</option>
                                                <option value="4">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Golongan Darah</div>
                                        </div>
                                        <div class="col-8">
                                            <select class="form-select @error('golongan_darah') is-invalid @enderror"
                                                name="golongan_darah" id="golongan_darah"
                                                aria-label="Default select example" required>
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="3">AB</option>
                                                <option value="4">O</option>
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
                                                    class="form-control @error('no_wa') is-invalid @enderror" required />
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
                                                    class="form-control @error('email') is-invalid @enderror" required />
                                                <label class="form-label"
                                                    for="form2Example1">humasbnnksleman@gmail.com</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="/pendaftaran-online"
                                                class="btn btn-warning btn-block mb-4">Kembali</a>
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
