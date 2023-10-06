@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Data Video</h1>
                    </div>
                </div>
                <hr>
                <div class="row m-3">
                    <div class="col-sm-6">
                        <a href="#" type="button" data-toggle="modal" data-target="#tambahModal"
                            class="btn btn-primary btn-rounded"><i class="fa-solid fa-plus fa-beat"></i>
                            Tambah Video</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Data Video</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Admin</th>
                                            <th>Thumbnail</th>
                                            <th>Tanggal Upload</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($video as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->judul }}
                                                </td>
                                                <td>{{ $item->deskripsi }}
                                                </td>
                                                <td>{{ $item->kategori_video }}
                                                </td>
                                                <td>{{ $item->users->name }}</td>
                                                <td><img src="{{ URL::asset('uploads/' . $item->gambar_thumbnail) }}"
                                                        width="100"></td>

                                                <td>{{ date('d M Y', strtotime($item->updated_at)) }}</td>

                                                <td>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#editModal-{{ $item->id }}"
                                                        class="btn btn-warning btn-xs">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                    </a>
                                                    <a rel="{{ $item->id }}" data-id="{{ $item->id }}"
                                                        data-name="{{ $item->judul }}" href="#" id="deleteVideo"
                                                        class="btn btn-danger btn-xs delete"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Admin</th>
                                            <th>Thumbnail</th>
                                            <th>Tanggal Upload</th>
                                            <th>Aksi</th>
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
    <!-- Modal Tambah Video -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Video</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/gallery/video/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Video</label>
                            <input type="text" name="judul" id="judul"
                                class="form-control @error('judul') is-invalid @enderror" placeholder="Video Tes" autofocus
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Video</label>
                            <textarea type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Event" autofocus required> </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_video">Kategori</label>
                            <select id="kategori_video" name="kategori_video"
                                class="form-control @error('kategori_video') is-invalid @enderror">
                                <option value="0">Pilih Album</option>
                                <option value="Event">Event</option>
                                <option value="Acara">Acara</option>
                                <option value="Pentas">Pentas</option>
                                <option value="Konser">Konser</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar_thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" name="gambar_thumbnail" id="gambar_thumbnail"
                                class="form-control @error('gambar_thumbnail') is-invalid @enderror" placeholder="Event"
                                autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="video_content" class="form-label">Video</label>
                            <input type="file" name="video_content" id="video_content"
                                class="form-control @error('video_content') is-invalid @enderror" placeholder="Event"
                                autofocus required>
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
    <!-- Modal Edit -->
    @foreach ($video as $data)
        <div class="modal fade" id="editModal-{{ $data->id }}" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Video</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/gallery/video/update/' . $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Video</label>
                                <input type="text" name="judul" id="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    value="{{ $data->judul }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Video</label>
                                <input type="text" name="deskripsi" id="deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                    value="{{ $data->deskripsi }}">

                                <textarea class="form-control" type="text" name="deskripsi" id="deskripsi">
                                    {{ $data->deskripsi }}
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_video">Kategori</label>
                                <select id="kategori_video" name="kategori_video"
                                    class="form-control @error('kategori_video') is-invalid @enderror">
                                    <option value={{ $data->kategori_video }}>{{ $data->kategori_video }}</option>
                                    <option value="Event">Event</option>
                                    <option value="Acara">Acara</option>
                                    <option value="Pentas">Pentas</option>
                                    <option value="Konser">Konser</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar_thumbnail" class="form-label">Gambar Thumbnail</label>
                                <input type="file" name="gambar_thumbnail" id="gambar_thumbnail"
                                    class="form-control @error('gambar_thumbnail') is-invalid @enderror">
                            </div>
                            <div class="mb-3">
                                <label for="gambar_thumbnail" class="form-label">Gambar Saat Ini</label>
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('uploads/' . $item->gambar_thumbnail) }}" width="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="video_content" class="form-label">Video</label>
                                <input type="file" name="video_content" id="video_content"
                                    class="form-control @error('video_content') is-invalid @enderror">
                            </div>
                            <div class="mb-3">
                                <label for="video_content" class="form-label">Video Saat Ini</label>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                        <video class="video-content" src="{{ asset('uploads/' . $item->video_content) }}"
                                            controls>
                                        </video>

                                    </div>
                                </div>
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
            var video_id = $(this).attr('data-id');
            var judul = $(this).attr('data-name');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus Video" + " " + judul + "?!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/gallery/video/delete/" + video_id + ""
                        swal("Video" + " " + judul + " " + "Berhasil Dihapus!", {
                            icon: "success",
                            timer: 4000
                        });
                    } else {
                        swal("Video" + " " + judul + " " + "Tidak Jadi Dihapus!");
                    }
                });
        });
    </script>
@endsection
