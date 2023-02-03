@extends('layouts.app')

@section('title', 'Login Page')

@push('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endpush

@section('content')

<div class="mainContainer" method="post">
    <div class="row">
        <form action="">
            @csrf
            <div class="form-group">
                <h3 class="">Login User</h3>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Login</button>
        </form>
    </div>
</div>
@endsection