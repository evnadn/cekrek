@extends('layout/main')

@section('title','Cekrek')

@section('cekrek')
<!-- Jumbotron -->
<div class="jumbotron text-center grey lighten-5 shadow-none">

    <div class="container">
        <!-- Title -->
        <h2 class="card-title h2">Cek Rekening</h2>

        <!-- Grid row -->
        <div class="row d-flex justify-content-center">

            <!-- Grid column -->
            <div class="col-xl-7 pb-2">

                <p class="card-text">Identifikasi apakah suatu rekening berpotensi melakukan penipuan.
                </p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-4 pb-4">

        <form class="form-inline justify-content-center">
            <input class="form-control rounded-pill mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                style="width: 50%;">
            <button class="btn peach-gradient rounded-pill btn-sm my-0" type="submit"><i class="fas fa-search" style="width: 15px; height: 15px;"></i></button>
        </form>
        <small>Contoh: <span class="text-info ">0489824682</span></small>

    </div>
    <!-- Jumbotron -->
</div>

<div class="container">
    <!-- Card deck -->
    <div class="card-deck text-center">

        <!-- Card -->
        <div class="card mb-4 shadow-sm">

            <!--Card content-->
            <div class="card-body">

                <!--Title-->
                <h4 class="card-title">10000</h4>
                <!--Text-->
                <p class="card-text">Kasus penipuan</p>

            </div>
        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4 shadow-sm">

            <!--Card content-->
            <div class="card-body">

                <!--Title-->
                <h4 class="card-title">Rp199.000.000</h4>
                <!--Text-->
                <p class="card-text">Total kerugian</p>

            </div>
        </div>
        <!-- Card -->

    </div>
    <!-- Card deck -->
</div>

<div class="container">
    <h4 class="mt-4 mb-4">Paling banyak dilaporkan</h4>
    <ul class="list-group">
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan </span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan </span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan </span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Morbi leo risus
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
        <a href="">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Cras justo odio
                <span class="badge badge-danger badge-pill"><i class="far fa-flag"></i> 100x Dilaporkan</span>
            </li>
        </a>
    </ul>
</div>
@endsection
