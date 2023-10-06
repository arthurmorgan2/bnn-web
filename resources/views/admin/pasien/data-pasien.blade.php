@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Data Pasien</h1>
                    </div>
                </div>
                <hr>
                {{-- <div class="row m-3">
                    <div class="col-sm-6">
                        <a href="#" type="button" data-toggle="modal" data-target="#tambahModal"
                            class="btn btn-primary btn-rounded"><i class="fa-solid fa-plus fa-beat"></i>
                            Tambah Pasien</a>
                    </div>
                </div> --}}
                <div class="row m-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Data Pasien</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Golongan Darah</th>
                                            <th>Nomer WA</th>
                                            <th>Email</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                            <th>Alamat Lengkap</th>
                                            <th>Agama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pasien as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->nama_lengkap }}
                                                </td>
                                                <td>{{ $item->nik }}
                                                </td>
                                                <td>{{ $item->tanggal_lahir }}
                                                </td>
                                                <td>{{ $item->jenis_kelamin }}
                                                </td>
                                                <td>{{ $item->golongan_darah }}
                                                </td>
                                                <td>{{ $item->no_wa }}
                                                </td>
                                                <td>{{ $item->email }}
                                                </td>

                                                <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>

                                                <td>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#editModal-{{ $item->id }}"
                                                        class="btn btn-warning btn-xs">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                    </a>
                                                    <a rel="{{ $item->id }}" data-id="{{ $item->id }}"
                                                        data-name="{{ $item->nama_lengkap }}" href="#"
                                                        id="deletePasien" class="btn btn-danger btn-xs delete"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                                <td>{{ $item->alamat_lengkap }}
                                                </td>
                                                <td>{{ $item->agama }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Golongan Darah</th>
                                            <th>Nomer WA</th>
                                            <th>Email</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                            <th>Alamat Lengkap</th>
                                            <th>Agama</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Pasien -->
    {{-- <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Foto</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/gallery/foto/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Foto</label>
                            <input type="text" name="deskripsi" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Event" autofocus
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_foto">Kategori</label>
                            <select id="kategori_foto" name="kategori_foto"
                                class="form-control @error('kategori_foto') is-invalid @enderror">
                                <option value="0">Pilih Album</option>
                                <option value="Event">Event</option>
                                <option value="Acara">Acara</option>
                                <option value="Pentas">Pentas</option>
                                <option value="Konser">Konser</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar_foto" class="form-label">Gambar Foto</label>
                            <input type="file" name="gambar_foto" id="gambar_foto"
                                class="form-control @error('gambar_foto') is-invalid @enderror" autofocus required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Modal Edit -->
    @foreach ($pasien as $data)
        <div class="modal fade" id="editModal-{{ $data->id }}" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Pasien</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/pasien/update/' . $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap Pasien</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                    value="{{ $data->nama_lengkap }}">
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">Nomor Induk Keluarga</label>
                                <input type="number" name="nik" id="nik" class="form-control"
                                    value="{{ $data->nik }}">
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                    value="{{ $data->tempat_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                    value="{{ $data->tanggal_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value={{ $data->jenis_kelamin }}>{{ $data->jenis_kelamin }}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                                <input type="textarea" name="alamat_lengkap" id="alamat_lengkap" class="form-control"
                                    value="{{ $data->alamat_lengkap }}">
                            </div>
                            <div class="mb-3">
                                <label for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-control">
                                    <option value={{ $data->agama }}>{{ $data->agama }}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="golongan_darah">Golongan Darah</label>
                                <select id="golongan_darah" name="golongan_darah" class="form-control">
                                    <option value={{ $data->golongan_darah }}>{{ $data->golongan_darah }}</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_wa" class="form-label">Nomor Whatsapp</label>
                                <div class="form-outline input-group">
                                    <div class="input-group-text">+62</div>
                                    <input type="number" name="no_wa" id="no_wa" class="form-control"
                                        value="{{ $data->no_wa }}">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="textarea" name="email" id="email" class="form-control"
                                    value="{{ $data->email }}">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $('.delete').click(function() {
            var pasien_id = $(this).attr('data-id');
            var nama_pasien = $(this).attr('data-name');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus Data" + " " + nama_pasien + "?!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/pasien/delete/" + pasien_id + ""
                        swal("Data" + " " + nama_pasien + " " + "Berhasil Dihapus!", {
                            icon: "success",
                            timer: 4000
                        });
                    } else {
                        swal("Data" + " " + nama_pasien + " " + "Tidak Jadi Dihapus!");
                    }
                });
        });
    </script>
@endsection
