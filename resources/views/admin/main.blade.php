@extends('template/layout_admin')
@section('title_web', 'Dashboard Admin | KolaBora')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            Dashboard
        </h3>
    </div>
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card card-statistics">
                <div class="card-body">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fa fa-user mr-2"></i>
                                New users
                            </p>
                            <h2>54000</h2>
                            <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                Avg Time
                            </p>
                            <h2>123.50</h2>
                            <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                Downloads
                            </p>
                            <h2>3500</h2>
                            <label class="badge badge-outline-success badge-pill">12% increase</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-check-circle mr-2"></i>
                                Update
                            </p>
                            <h2>7500</h2>
                            <label class="badge badge-outline-success badge-pill">57% increase</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-chart-line mr-2"></i>
                                Sales
                            </p>
                            <h2>9000</h2>
                            <label class="badge badge-outline-success badge-pill">10% increase</label>
                        </div>
                        <div class="statistics-item">
                            <p>
                                <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                Pending
                            </p>
                            <h2>7500</h2>
                            <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-gift"></i>
                        Orders
                    </h4>
                    <canvas id="orders-chart"></canvas>
                    <div id="orders-chart-legend" class="orders-chart-legend"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-calendar-alt"></i>
                        Calendar
                    </h4>
                    <div id="inline-datepicker-example" class="datepicker"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-facebook btn-rounded">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Facebook</h5>
                                <p class="mb-0">813 friends</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-twitter btn-rounded">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Twitter</h5>
                                <p class="mb-0">9000 followers</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-md-0">
                            <button class="btn btn-social-icon btn-google btn-rounded">
                                <i class="fab fa-google-plus-g"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Google plus</h5>
                                <p class="mb-0">780 friends</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-social-icon btn-linkedin btn-rounded">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                            <div class="ml-4">
                                <h5 class="mb-0">Linkedin</h5>
                                <p class="mb-0">1090 connections</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
