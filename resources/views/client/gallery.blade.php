@extends('layouts.client.main')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="container-fluid gallery-container">
        <div class="row">
            <div class="col-md-12">
                <div class="row my-4 d-flex justify-content-center align-items-center">
                    <div class="col-md-3 col-4 p-3 text-center">
                        <a href="#foto" id="foto-link">
                            <div class="nav-gallery active nav-foto p-3 rounded-5">
                                Foto
                            </div>
                        </a>

                    </div>
                    <div class="col-md-3 col-4 p-3 text-center">
                        <a href="#video" id="video-link">
                            <div class="nav-gallery nav-video p-3 rounded-5">
                                Video
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="foto" class="container-content">
                <div class="row d-flex justify-content-center align-items-center">
                    @forelse ($foto as $item)
                        <div
                            class="col-md-3 col-8 mx-5 my-3 rounded-5 shadow foto-container d-flex justify-content-center align-items-center">
                            <div class="foto-img">
                                <a href="{{ asset('uploads/' . $item->gambar_foto) }}" data-lightbox="photos">
                                    <img class="img-fluid" src="{{ asset('uploads/' . $item->gambar_foto) }}"
                                        alt="Photo Content">
                                </a>
                            </div>

                            <div class="description-container">
                                <div class="foto-description">
                                    {{ Str::words($item->deskripsi, 20, '...') }}
                                </div>
                                <br>
                                <div class="row foto-footer d-flex">
                                    <div class="col foto-source">
                                        {{ $item->users->name }}
                                    </div>
                                    <div class="col foto-date text-end">
                                        {{ date('d M Y', strtotime($item->created_at)) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 mb-4">
                            <div class="card-text text-center">~ Foto Tidak Tersedia ~</div>
                        </div>
                    @endforelse

                </div>
            </div>
            <div id="video" class="container-content" style="display: none;">
                <div class="row d-flex justify-content-center align-items-center">
                    @forelse ($video as $item)
                        <div
                            class="col-md-3 col-10 video-container mx-5 my-3 rounded-5 shadow d-flex justify-content-center align-items-center">
                            <div class="video-card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal-{{ $item->id }}">

                                    <div class="video-overlay">
                                        <i class="play-icon fa-solid fa-play" style="color: #1a75bb"></i>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('uploads/' . $item->gambar_thumbnail) }}"
                                        alt="Video Content">
                                </a>
                            </div>


                        </div>
                    @empty
                        <div class="col-md-12 mb-4">
                            <div class="card-text text-center">~ Video Tidak Tersedia ~</div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @foreach ($video as $data)
        <div class="modal fade" id="videoModal-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-center modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <div class="video-title">
                                {{ $item->judul }}
                            </div>
                            <div class="video-kategori mt-2">
                                {{ $item->kategori_video }}
                            </div>
                        </div>
                        <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-x"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <!-- Embed your video here, e.g., using an iframe -->
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div
                                    class="video-content-container rounded-5 shadow d-flex justify-content-center align-items-center">
                                    <video class="video-content" src="{{ asset('uploads/' . $item->video_content) }}"
                                        controls></video>

                                </div>
                            </div>
                            <div class="col-md-12 m-2">
                                <div class="video-description">
                                    {!! nl2br($item->deskripsi) !!}
                                </div>
                                <br>
                                <div class="row d-flex">
                                    <div class="col-3">
                                        <div class="video-uploader">
                                            {{ $item->users->name }}
                                        </div>
                                    </div>
                                    <div class="col-8 text-end">
                                        <div class="video-date">
                                            {{ date('d M Y', strtotime($item->created_at)) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script type="typescript" src="js/gallery.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-gallery').on('click', function() {
                $('.nav-gallery').removeClass('active');
                $(this).addClass('active');
            });
        });
        $(document).ready(function() {
            $('#foto-link').click(function(e) {
                e.preventDefault();
                $('.container-content').hide();
                $('#foto').show();
            });

            $('#video-link').click(function(e) {
                e.preventDefault();
                $('.container-content').hide();
                $('#video').show();
            });
        });
    </script>
@endsection
