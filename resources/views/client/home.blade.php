<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS Boststrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS Main File --}}
    <link rel="stylesheet" href="{{ url('css/main-client.css') }}">
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>BNN Klinik</title>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar fixed-top navbar-expand-md navbar-dark" style="background-color: #4158d0">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Dropdown
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
                    <li class="nav-item">
                        <a class="nav-link">Link</a>
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
