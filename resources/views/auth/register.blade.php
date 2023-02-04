@extends('layouts.app')

@section('title', 'Register Page')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="registerContainer">
    <div class="row">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <h3 class="text-center">Register User</h3>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
                <span class="text-danger small">@error('name') {{ $message }} @enderror</span>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
            </div>

            <div class="form-group mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number">
                <span class="text-danger small">@error('phone') {{ $message }} @enderror</span>
            </div>

            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address">
                <span class="text-danger small">@error('address') {{ $message }} @enderror</span>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                <span class="text-danger small">@error('password') {{ $message }} @enderror</span>
            </div>

            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter your confirm password">
                <span class="text-danger small">@error('password_confirmation') {{ $message }} @enderror</span>
            </div>

            <div class="button">
                <button type="submit" class="btn btn-primary mt-2 col-12">Register</button>
            </div>

            <div class="additional_link mt-3">
                <p class="text-center">Already have an account?<a href="{{ route('login') }}" class="text-decoration-none"> Login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection