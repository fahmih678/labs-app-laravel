@extends('layouts.auth')
@section('title', 'Login')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4 text-center">
                                    <h3>Login Page</h3>
                                    <p class="mb-4">Hey, enter your detail to get sign in
                                        to your accoun</p>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger mt-1 p-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-group last">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger mt-1 p-1">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <button type="submit"
                                        class="btn btn-pill text-white btn-block btn-primary">Button</button>

                                </form>
                                <span class="d-block text-center my-4 text-muted">Don't have an account ? <strong><a
                                            href="/register" class="text-decoration-none">Register
                                            Now</a></strong></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
