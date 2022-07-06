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
                                        @if ($newUser == null)
                                            @foreach ($newUser as $user)
                                                <tr>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <button class="btn btn-primary">Detail</button>
                                                        <form action="{{ route('admin.manajemen-user.approve') }}"
                                                            method="post">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <input type="text" value="{{ $user->id }}"
                                                                name="users_id" hidden>
                                                            <button type="submit" class="btn btn-success">Approve</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                Tidak ada User Baru
                                            </tr>
                                        @endif

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
                                        @foreach ($activeUser as $user)
                                            <tr>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>
                                                    @php
                                                        $roleName = $user->roles->first()->name
                                                    @endphp
                                                    <a class="btn @if($roleName == 'member') btn-status @elseif($roleName == 'admin') btn-danger  @endif">{{ $roleName }}</a>
                                                    {{-- <a class="btn btn-primary">Detail</a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
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
