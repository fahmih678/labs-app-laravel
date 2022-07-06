@extends('layouts.dashboard')
@section('manajemen-user-active', 'active')

@section('title', 'Manajemen User')

@section('content')
    <div class="main-wrapper admin-users">
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col">
                        <div class="new-user-lay">
                            <h1 class="new-user-title">New User</h1>
                            <div class="new-user-table-lay">
                                <table class="table table-bordered new-user-table">
                                    <tbody>
                                        <tr>
                                            <td>anisa@gmail.com</td>
                                            <td>
                                                <a class="btn btn-primary">Detail</a>
                                                <a class="btn btn-success">Approve</a>
                                                <a class="btn btn-danger">Disapprove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>rumi@student.uns.ac.id</td>
                                            <td>
                                                <a class="btn btn-primary">Detail</a>
                                                <a class="btn btn-success">Approve</a>
                                                <a class="btn btn-danger">Disapprove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>hana@student.uns.ac.id</td>
                                            <td>
                                                <a class="btn btn-primary">Detail</a>
                                                <a class="btn btn-success">Approve</a>
                                                <a class="btn btn-danger">Disapprove</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="user-lay">
                            <h1 class="user-title">User</h1>
                            <div class="user-table-lay">
                                <table class="table table-bordered user-table">
                                    <tbody>
                                        <tr>
                                            <td>azizah@gmail.com</td>
                                            <td>Azizah nur fitri</td>
                                            <td>
                                                <a class="btn btn-secondary btn-status">Member</a>
                                                <a class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>zaki@student.uns.ac.id</td>
                                            <td>Zaki Hidayah</td>
                                            <td>
                                                <a class="btn btn-secondary btn-status">Admin</a>
                                                <a class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>liana@student.uns.ac.id</td>
                                            <td>Liana Rahmawati</td>
                                            <td>
                                                <a class="btn btn-secondary btn-status">Member</a>
                                                <a class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection
