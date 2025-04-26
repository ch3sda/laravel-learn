@extends('layouts.guest')

@section('title', 'Home Page')

@section('content')
<div class="bg-primary text-white py-5 rounded">
    <div class="container text-center">
        <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">Greeting Teacher!</h1>
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">This is HYSAVUT CHANCHESDA's work 🚀</h1>
        <p class="lead mt-3 animate__animated animate__fadeInUp">this is a playgroud for WCT Session! all the thing that
             display is just i play around with new feature!</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-4 glow-button animate__animated animate__bounceIn">Explore my work</a>
    </div>
</div>

<div class="bg-primary mt-4 text-white py-4 rounded">
    <div class="container text-center">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">This Week 7's Assingnement</h1>
    </div>
</div>


<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-lightning-charge-fill display-4 text-primary mb-3"></i>
                <h4>Auth</h4>
                <p>I do implements Laravel Auth,.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-shield-lock-fill display-4 text-primary mb-3"></i>
                <h4>UI</h4>
                <p>I do some play around with middleware do display different UI between Guest and User.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-stars display-4 text-primary mb-3"></i>
                <h4>Theme</h4>
                <p>I do create my old theme (no download) ✨.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-4 animate__animated animate__fadeIn">Ready to check my work?</h2>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg glow-button animate__animated animate__pulse animate__infinite">Let go!🚀</a>
    </div>
</div>
@endsection
