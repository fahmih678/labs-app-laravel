@extends('layouts.dashboard')
@section('dashboard-active', 'active')

@section('title', 'Dashboard')

@section('content')
    <div class="main-wrapper admin-dash">
        <div class="main-content">
            <section class="section">
                <div class="row dashboard-text">
                    <div class="col">
                        <h1 class="dashboard-title">Hello, Admin</h1>
                        <p class="dashboard-desc-one">Welcome to Sebelas Maret University Room Reservation Website</p>
                        <p class="dashboard-desc-two">Borrow space easily and quickly</p>
                    </div>
                </div>
                <div class="row card-layout">
                    <div class="col-md-4">
                        <div class="card-reservation">
                            <div class="card-reservation-img">
                                <img src="" alt="" width="35px">
                            </div>
                            <div class="card-reservation-desc">
                                <h6 class="reservation-desc-total">3</h6>
                                <h6 class="reservation-desc-title">Lab Reservation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-laboratory">
                            <div class="card-laboratory-img">
                                <img src="" alt="" width="35px">
                            </div>
                            <div class="card-laboratory-desc">
                                <h6 class="laboratory-desc-total">3</h6>
                                <h6 class="laboratory-desc-title">Laboratory</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-users">
                            <div class="card-users-img">
                                <img src="" alt="" width="35px">
                            </div>
                            <div class="card-users-desc">
                                <h6 class="users-desc-total">50</h6>
                                <h6 class="users-desc-title">Users</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="chart-layout">

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
