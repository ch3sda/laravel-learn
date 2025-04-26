@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-primary text-white">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h2 class="text-center mb-4">Welcome Back 👋</h2>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-dark">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-dark">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label text-dark" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 glow-button">Login</button>

            <p class="mt-3 text-center text-dark">Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a></p>
        </form>
    </div>
</div>
@endsection
