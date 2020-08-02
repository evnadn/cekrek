<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!-- FontAwesoma -->
    <link href="{{ url('assets/fontawesome/css/all.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}">

    {{-- Font --}}
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <style>
        body,
        head,
        footer {
            font-family: 'Nunito';
            font-size: 18px;
        }

    </style>

    <title>@yield('title')</title>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Cekrek</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}"><i class="far fa-credit-card"></i> Cek Rekening</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="{{ url('/phone') }}"><i class="fas fa-phone"></i> Cek Telepon</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="{{ url('/report') }}"><i class="far fa-flag"></i> Laporkan
                            Penipuan</a>
                    </li>
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user" style="color: white"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="{{ url('/dashboard') }}">Profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    @yield('cekrek')
    @yield('cekphone')
    @yield('report')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('assets/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/fontawesome/js/all.js') }}"></script>
    <script src="{{ url('assets/fontawesome/js/sb-admin-2.min.js') }}"></script>
    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });
    </script>

</body>

<!-- Footer -->
<footer class="page-footer font-small bg-primary mt-5">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">&copy; 2020 Made with <i class="fas fa-heart danger-text"
            style="color: red"> </i> by
        <a href="#">BOL Web Programming Team 4</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>
