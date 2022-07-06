@extends('layouts.dashboard')
@section('profile-active', 'active')

@section('title', 'Profile')

@section('content')
    <div class="main-content">
        <section class="section">
            <h1 class="profile-title">Edit Profile</h1>
            <div class="profile-layout">
                <div class="row profile-lay">
                    <div class="col-lg-3 profile-lay-avatar">
                        <div class="profile-avatar">
                            <img src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" width="150px" alt=""
                                class="profile-avatar-img rounded-circle mr-1">
                            <h5 class="profile-avatar-title">{{ $user->username }}</h5>
                            <p class="profile-avatar-email">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="col-lg-8 profile-data-lay">
                        <form class="profile-data-form" action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="text" name="id" value="{{ $user->id }}" hidden>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            value="{{ $user->firstname }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                value="{{ $user->lastname }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="masukkan password baru">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12" style="text-align: end;">
                                    <div class="btn-lay">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
