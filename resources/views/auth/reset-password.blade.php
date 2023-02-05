@extends('layouts.app')

@section('title', 'Reset Password')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="resetPasswordContainer">
    <div class="row">
        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $request->token }}">
            <div class="form-group mb-3">
                <h3 class="text-center">Reset Password</h3>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                <span class="text-danger small">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group mb-3">
                <label for="password">New Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your new password">
                <span class="text-danger small">@error('password') {{ $message }} @enderror</span>
            </div>
            <div class="form-group mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter your confirm password">
                <span class="text-danger small">@error('password_confirmation') {{ $message }} @enderror</span>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary mt-2 col-12">Reset Password</button>
            </div>
        </form>
    </div>
</div>
@endsection