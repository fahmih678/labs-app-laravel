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
                <section class="section">
                    <div class="row mt-4">
                        <div class="col-12 history-lay p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="reservation-table">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Labolatory Name</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($reservations as $reservation)
                                                    <tr>
                                                        <td>{{ $reservation->name }}</td>
                                                        <td>{{ $reservation->start_time }}</td>
                                                        <td>{{ $reservation->end_time }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
