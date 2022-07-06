@extends('layouts.dashboard')
@section('manajemen-lab-reservation-active', 'active')

@section('title', 'Manajemen Reservation')

@section('content')
    <div class="main-wrapper admin-reservation">
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col">
                        <h1 class="reservation-title">Laboratory Reservation</h1>
                        <div class="reservation-table">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Email User</th>
                                        <th>Laboratory Name</th>
                                        <th>Date</th>
                                        <th>Time to apply</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <td>{{$reservation->user->email}}</td>
                                            <td>{{$reservation->lab->name}}</td>
                                            <td>{{$reservation->start_time}}</td>
                                            <td>{{$reservation->end_time}}</td>
                                            {{-- <td>5 hours ago</td> --}}
                                            @php
                                               $status =  $reservation->is_approved;
                                            @endphp
                                            <td><a href="" class="btn @if($status == 'pending') btn-status @elseif($status == 'not approved') btn-danger @elseif($status == 'approved') btn-success @endif">{{$status}}</a></td>
                                            <td>
                                                @if($status == 'approved')
                                                Sudah di approved
                                                @else
                                                <form action="{{ route('admin.manajemen-reservation.approve') }}"
                                                            method="post">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <input type="text" value="{{ $reservation->id }}"
                                                                name="reservation_id" hidden>
                                                            <button type="submit" class="btn btn-success">Approve</button>
                                                        </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
