@extends('layouts.dashboard')
@section('dashboard-active', 'active')

@section('title', 'Dashboard')

@section('content')
    <div id="app">
        <div class="main-wrapper dash-mem">
            <div class="main-content">
                <section class="section">
                    <div class="row dashboard-text">
                        <div class="col">
                            <h1 class="dashboard-title">Hello, {{ $user->firstname }}</h1>
                            <p class="dashboard-desc-one">Welcome to Sebelas Maret University Lab Reservation Website</p>
                            <p class="dashboard-desc-two">Borrow laboratorium easily and quickly</p>
                        </div>
                    </div>
                    <div class="row card-layout">
                        <div class="col-md-4">
                            <div class="card-reservation">
                                <div class="card-reservation-img">
                                    <img src="{{ asset('img/book.png') }}" alt="" width="35px">
                                </div>
                                <div class="card-reservation-desc">
                                    <h6 class="reservation-desc-total">{{ $reservationTotal }}</h6>
                                    <h6 class="reservation-desc-title">Lab Reservation</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-laboratory">
                                <div class="card-laboratory-img">
                                    <img src="{{ asset('img/school.png') }}" alt="" width="35px">
                                </div>
                                <div class="card-laboratory-desc">
                                    <h6 class="laboratory-desc-total">{{ $labTotal }}</h6>
                                    <h6 class="laboratory-desc-title">Laboratory</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
