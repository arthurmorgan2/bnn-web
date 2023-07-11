<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- CSS Boststrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS Main File --}}
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb/mdb.min.css" />
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>BNN Klinik</title>
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- News Content Section --}}
    @yield('content')

    {{-- Footer Section --}}
    <footer class="text-center text-lg-start text-white position-relative" style="background-color: #4158d0">
        <!-- Grid container -->
        <div class="container-fluid p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Badan Narkotika Nasional Klinik Sleman
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate rem tempore repudiandae
                            modi voluptate quas voluptates ratione incidunt veritatis quisquam atque error pariatur iure
                            ullam praesentium perferendis sequi, voluptatum laudantium.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">PUBLIKASI & PERS</h6>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/berita-kegiatan/" class="text-white">Berita Kegiatan</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://slemankab.bnn.go.id/siaran-pers/" class="text-white">Siaran PERS</a>
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
                            <a target="_blank" href="https://perpustakaan.bnn.go.id/id" class="text-white">Perpustakaan Digital</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://rehabilitasi.bnn.go.id/public/" class="text-white">Layanan Rehabilitasi(SIRENA)</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://ppid.bnn.go.id/" class="text-white">Layanan Informasi Hukum(PPID)</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://tokostopnarkoba.bnn.go.id/" class="text-white">Toko Stop Narkoba</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                        <p><i class="fas fa-home mr-3"></i> Sucen, Triharjo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55514</p>
                        <p><i class="fas fa-envelope mr-3"></i> humasbnnksleman@gmail.com</p>
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
                            <a class="text-white" href="#/">nurakura</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/bnnksleman?mibextid=ZbWKwL" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a href="https://twitter.com/bnnksleman?t=DipdXBAzVz-AOjsPjTFz0g&s=09" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a href="https://slemankab.bnn.go.id/" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a href="https://www.youtube.com/@bnnksleman" class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
