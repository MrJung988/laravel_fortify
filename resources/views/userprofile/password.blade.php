@extends('layouts.app')

@section('title', 'Reset Password')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')
<div class="resetPasswordContainer">
    <div class="row">
        <form action="" method="post">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <h3 class="text-center">Change User Password</h3>
            </div>
            <hr>
            <div class="form-group mb-3">
                <label for="current_password">Current Password</label>
                <input type="current_password" name="current_password" id="current_password" class="form-control" placeholder="Enter your current password">
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
                <button type="submit" class="btn btn-primary mt-2 col-12">Change Password</button>
            </div>
        </form>
    </div>
</div>
@endsection