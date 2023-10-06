<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- CSS Boststrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- CSS Main File --}}
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb/mdb.min.css" />
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    {{-- Tab Icon --}}
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/logo.png') }}">
    <title>Login Admin BNNK Sleman</title>
</head>

<body>
    <!--Nav Container-->
    <div class="container w-75">
        <!-- navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Daftar</a>
            </li>
        </ul>
    </div>
    <!--navs -->
    <!-- Content -->
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="/login" method="post">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" required autofocus />
                        <label class="form-label" for="email">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <!-- 2 column grid layout -->
                    {{-- <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                    checked />
                                <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div> --}}

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                </form>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Belum Punya Akun? <a href="#!">Daftar</a></p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerName" class="form-control" />
                        <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="registerUsername" class="form-control" />
                        <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="registerEmail" class="form-control" />
                        <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="registerRepeatPassword" class="form-control" />
                        <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                            checked aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            Sudah Yakin dengan data yang anda isi?
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3">Daftar</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>



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
