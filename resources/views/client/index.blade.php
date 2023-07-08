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
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>BNN Klinik</title>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar fixed-top navbar-expand-md navbar-dark">
        <a class="navbar-brand d-flex flex-row" href="#">
            <div class="p-2">
                <img src="images/logo.png" width="40" height="40" class="d-inline-block align-center"
                    alt="">
            </div>
            <div class="p-2 mt-1 d-none d-sm-block">Badan Narkotika Nasional Klinik
                Sleman
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container-fluid">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Daftar Online
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <ul class="navbar-nav sm-icons mx-auto d-flex justify-content-end">
                    <div class="d-flex flex-row">

                        <div class="p-2">
                            <li><a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></></a></li>
                        </div>
                        <div class="p-2">
                            <li><a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        </div>
                        <div class="p-2">
                            <li><a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </div>
                        <div class="p-2">
                            <li><a class="nav-link" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </div>

                    </div>
                </ul>
            </div>
        </div>
    </nav>

    {{-- News Content Section --}}
    <section class="news-content">
        <div class="container  bg-success">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="content-title">News</h1>
                    <div class="row">
                        <div class=" col card-container bg-dark">
                            <div class="card" style="width: 18rem;">
                                <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col card-container bg-dark">
                            <div class="card" style="width: 18rem;">
                                <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col card-container bg-dark">
                            <div class="card" style="width: 18rem;">
                                <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col card-container bg-dark">
                            <div class="card" style="width: 18rem;">
                                <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk
                                        of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 bg-danger">
                    <h5 class="content-title-2">Artikel Populer</h5>
                    <div class="row">
                        <div class="col card-container-2 bg-warning d-flex justify-content-center">
                            <div class="card" style="width: 12rem; height: auto;">
                                <img src="https://fakeimg.pl/50/" class="card-img-top img-fluid" alt="...">
                                <div class="card-body populer-news-card">
                                    <h5 class="card-title populer-news-title">Card title</h5>
                                    <p class="card-text populer-news-text">Some quick example text to build on the card
                                        title and make up
                                        the
                                        bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Next Content...</h1>
                </div>
            </div>
        </div>
    </section>



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
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a class="text-white">Bootstrap</a>
                        </p>
                        <p>
                            <a class="text-white">WordPress</a>
                        </p>
                        <p>
                            <a class="text-white">BrandFlow</a>
                        </p>
                        <p>
                            <a class="text-white">Bootstrap Angular</a>
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
                            <a class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a class="text-white">Help</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-left">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                        <p><i class="fas fa-home mr-3"></i> Yogyakarta, Kasihan, Bantul</p>
                        <p><i class="fas fa-envelope mr-3"></i> nurakura9@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +62 895 4090 42060</p>
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
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
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
</body>

</html>
