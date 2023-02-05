@extends('layouts.app')

@section('title', 'Forgot-password')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="resetPasswordContainer">
    <div class="row">
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <h3 class="text-center">Forgot Password</h3>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary mt-2 col-12">Send Password Reset Link</button>
            </div>
        </form>
    </div>
</div>
@endsection