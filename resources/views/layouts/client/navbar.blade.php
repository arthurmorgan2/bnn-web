<nav class="navbar fixed-top navbar-expand-sm navbar-dark">
    <a class="navbar-brand d-flex flex-row" href="#">
        <div class="p-2">
            <img src="{{ URL::asset('images/logo.png') }}" width="40" height="40" class="d-inline-block align-center"
                alt="">
        </div>
        <div class="d-none d-sm-block">Badan Narkotika Nasional Klinik
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
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pendaftaran-online">Daftar Online</a>
                </li>
                {{-- <li class="nav-item dropdown">
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
                </li> --}}
            </ul>
        </div>
        <div class="container-fluid">
            <ul class="navbar-nav sm-icons mx-auto d-flex justify-content-end">
                <div class="d-flex flex-row">

                    <div class="p-2">
                        <li><a class="nav-link" target="_blank"
                                href="https://twitter.com/bnnksleman?t=DipdXBAzVz-AOjsPjTFz0g&s=09"><i
                                    class="fa-brands fa-twitter"></i></></a></li>
                    </div>
                    <div class="p-2">
                        <li><a class="nav-link" target="_blank"
                                href="https://www.facebook.com/bnnksleman?mibextid=ZbWKwL"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                    </div>
                    <div class="p-2">
                        <li><a class="nav-link" target="_blank"
                                href="https://www.instagram.com/infobnn_kab_sleman/?hl=id"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                    </div>
                    <div class="p-2">
                        <li><a class="nav-link" target="_blank" href="https://www.youtube.com/@bnnksleman"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                    </div>

                </div>
            </ul>
        </div>
    </div>
</nav>
