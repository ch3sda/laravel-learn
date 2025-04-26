@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Welcome to M3 Class!</h1>
    <p class="lead">My name is HYSAVUTH CHANCHESDA.</p>
    <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
</div>
@endsection
