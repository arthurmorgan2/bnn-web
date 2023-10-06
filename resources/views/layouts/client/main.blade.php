<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Ajax Cui --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- CSS Boststrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS Main File --}}
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- MDB -->
    <link rel="stylesheet" href="{{ URL::asset('css/mdb/mdb.min.css') }}" />
    <!-- Lightbox2 -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Tab Icon --}}
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/logo.png') }}">
    {{-- SweetALert JS --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <title>BNN Klinik</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.client.navbar')

    {{-- News Content Section --}}
    @yield('content')

    {{-- Footer Section --}}
    <footer class="text-center text-lg-start text-white position-relative footer-container m-0">
        <!-- Grid container -->
        <div class="container-fluid p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PUBLIKASI & PERS</h6>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/berita/" class="text-white">Bidang
                                Umum</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/pencegahan/" class="text-white">Bidan
                                Pencegah dan Pemberdayaan Masyarakat</a>
                        </p>
                        <p>
                            <a target="blank" href="https://slemankab.bnn.go.id/rehabilitasi/" class="text-white">Bidang
                                Rehabilitasi</a>
                        </p>
                        <p>
                            <a target="blank" href="https://slemankab.bnn.go.id/pemberantasan/"
                                class="text-white">Bidang Bidang Pemberantasan</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PUBLIKASI & PERS</h6>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/berita-kegiatan/"
                                class="text-white">Berita Kegiatan</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/siaran-pers/" class="text-white">Siaran
                                PERS</a>
                        </p>
                        <p>
                            <a target="blank" href="https://slemankab.bnn.go.id/artikel/" class="text-white">Artiker</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Links
                        </h6>
                        <p>
                            <a target="_blank" href="https://bnn.go.id/" class="text-white">BNN Pusat</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://perpustakaan.bnn.go.id/id" class="text-white">Perpustakaan
                                Digital</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://rehabilitasi.bnn.go.id/public/" class="text-white">Layanan
                                Rehabilitasi(SIRENA)</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://ppid.bnn.go.id/" class="text-white">Layanan Informasi
                                Hukum(PPID)</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://tokostopnarkoba.bnn.go.id/" class="text-white">Toko Stop
                                Narkoba</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                        <p><i class="fas fa-home mr-3"></i> Sucen, Triharjo, Kec. Sleman, Kabupaten Sleman, Daerah
                            Istimewa Yogyakarta 55514</p>
                        <p><i class="fas fa-envelope mr-3"></i>humasbnnksleman@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 896-7273-6055</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2023 Copyright:
                            <a class="text-white" href="#">Badan Narkotika Nasional Klinik Sleman</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a target="_blank" href="https://www.facebook.com/bnnksleman?mibextid=ZbWKwL"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a target="_blank" href="https://twitter.com/bnnksleman?t=DipdXBAzVz-AOjsPjTFz0g&s=09"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a target="_blank" href="https://slemankab.bnn.go.id/"
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a target="_blank" href="https://instagram.com/infobnn_kab_sleman?igshid=MzRlODBiNWFlZA=="
                            class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>

    {{-- CSS JScript --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
    {{-- Pagination AJAX --}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        //pagination
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            record(page)
        })

        function record(page) {
            $.ajax({
                url: "/ajax-paginate?page=" + page,
                success: function(res) {
                    $('.card-data').html(res);
                }
            })
        }
    </script>

    @include('sweetalert::alert')

</body>

</html>
