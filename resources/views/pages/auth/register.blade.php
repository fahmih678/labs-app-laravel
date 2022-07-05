@extends('layouts.auth')
@section('title', 'Register')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4 text-center">
                                    <h3>Register Account</h3>
                                </div>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group last mb-4">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" id="firstname" name="firstname">
                                            </div>
                                            @error('firstname')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group last mb-4">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" name="lastname">
                                            </div>
                                            @error('lastname')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group first">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username">
                                            </div>
                                            @error('name')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group last mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                            @error('email')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group last mb-4">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                            </div>
                                            @error('password')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group last mb-4">
                                                <label for="password_confirmation">Password Confirmation</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation">
                                            </div>
                                            @error('password_confirmation')
                                                <div class="alert alert-danger mt-1 p-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>

                                    <button type="submit" value="Sign Up"
                                        class="btn btn-pill text-white btn-block btn-primary"></button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
