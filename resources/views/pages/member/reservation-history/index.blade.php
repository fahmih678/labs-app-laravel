@extends('layouts.dashboard')
@section('reservation-history-active', 'active')

@section('title', 'Reservation History')

@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="history-title">Reservation History</h1>
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
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservations as $reservation)
                                            <tr>
                                                <td>{{ $reservation->lab->name }}</td>
                                                <td>{{ $reservation->start_time }}</td>
                                                <td>{{ $reservation->end_time }}</td>
                                                <td>
                                                    <div style="pointer-events: none"
                                                        class="btn @if ($reservation->is_approved == 'pending') btn-primary @elseif($reservation->is_approved == 'approved') btn-success @else btn-danger @endif">
                                                        {{ $reservation->is_approved }}</div>
                                                </td>

                                                <td><a href="" class="btn btn-primary"><img
                                                            src="{{ asset('img/eye.png') }}" alt=""></a></td>
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
@endsection
