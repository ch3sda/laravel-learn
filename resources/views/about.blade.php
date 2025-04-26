@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 animate__animated animate__fadeInDown">About EpicApp</h1>
        <p class="lead animate__animated animate__fadeInUp">The Story Behind Our Success</p>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 animate__animated animate__fadeInLeft">
            <img src="https://via.placeholder.com/500x300" class="img-fluid rounded shadow-sm" alt="About Us Image">
        </div>

        <div class="col-md-6 animate__animated animate__fadeInRight">
            <h2>Who We Are</h2>
            <p class="text-muted">EpicApp was born from the idea that software should be not just functional — but insanely cool. We believe technology should be fun, powerful, and incredibly smooth.</p>

            <h2>Our Mission</h2>
            <p class="text-muted">To empower developers and users around the world with jaw-droppingly awesome digital experiences 🌍.</p>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <div class="col-md-4 animate__animated animate__zoomIn">
            <h3>Founded</h3>
            <p>2025</p>
        </div>
        <div class="col-md-4 animate__animated animate__zoomIn">
            <h3>Users</h3>
            <p>+10,000</p>
        </div>
        <div class="col-md-4 animate__animated animate__zoomIn">
            <h3>Countries</h3>
            <p>+50</p>
        </div>
    </div>
</div>

<div class="bg-light py-5 text-center">
    <h2 class="mb-4 animate__animated animate__fadeIn">Want to Be Part of the Journey?</h2>
    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg glow-button animate__animated animate__pulse animate__infinite">Contact Us</a>
</div>
@endsection
