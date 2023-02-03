@extends('layouts.app')

@section('title', 'Register Page')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="mainContainer">
    <div class="row">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <h3 class="">Register User</h3>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control mb-3" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control mb-3" placeholder="Enter your address">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control mb-3" placeholder="Enter your confirm password">
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary mt-2 col-12">Register</button>
            </div>
            <div class="additional_link mt-2">
                <p class="text-center">Already have an account?<a href="{{ route('login') }}"> Login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection