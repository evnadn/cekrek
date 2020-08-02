@extends('layout/fordashboard')

@section('title','Cekrek - Dashboard')

@section('dashboard')
<!-- Begin Page Content -->
<div class="container-fluid">
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">Profile</h3>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Nama</label>
                                    <p>Evan Adrian</p>
                                </div>
                                <div class="media">
                                    <label>Email</label>
                                    <p>evan.adrian001@binus.ac.id</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://media-exp1.licdn.com/dms/image/C5103AQFy9XqPy72S5A/profile-displayphoto-shrink_200_200/0?e=1597881600&v=beta&t=xTXcQmk9zRkPdXrEp5J28LXDOZ47CwudIw-LrIJqJXY" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End of Main Content -->
@endsection
