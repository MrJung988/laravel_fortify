@extends('layouts.app')

@section('title', 'Login Page')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')

<div class="loginContainer" method="post">
    <div class="row">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group mb-4">
                <h3 class="text-center">Login User</h3>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                <span class="text-danger small">@error('password') {{ $message }} @enderror</span>
            </div>
            <p class="text-primary">
                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
            </p>
            <button type="submit" class="btn btn-primary mt-2 col-12">Login</button>
            <div class="additional_link mt-3">
                <p class="text-center">Don't have an account?<a href="{{ route('register') }}" class="text-decoration-none"> Register</a></p>
            </div>
        </form>
    </div>
</div>
@endsection