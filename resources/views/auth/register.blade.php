@extends('layouts.guest')

@section('title', 'Register')

@section('content')
<div class="row vh-100">
    <div class="col-md-6 d-none d-md-flex bg-primary justify-content-center align-items-center text-white">
        <h1 class="display-4"> Join my work now! 🚀</h1>
    </div>

    <div class="col-md-6 d-flex align-items-center bg-light">
        <div class="container p-5">
            <h2 class="mb-4">Create Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 glow-button">Register</button>

                <p class="mt-3 text-center">Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
