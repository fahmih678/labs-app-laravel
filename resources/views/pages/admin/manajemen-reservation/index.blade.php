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
                                    <tr>
                                        <td>fahmi@student.uns.ac.id</td>
                                        <td>Software Engineering</td>
                                        <td>Sunday, May 22, 2022</td>
                                        <td>5 hours ago</td>
                                        <td><a href="" class="btn btn-status">Ordered</a></td>
                                        <td><a href="" class="btn btn-primary"><img src="img/eye.png"
                                                    alt=""></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
