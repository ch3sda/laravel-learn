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

<!-- Week 7 -->
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
    <div class="container text-center">
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg glow-button animate__animated animate__pulse animate__infinite">Try UI & Auth 🚀</a>
    </div>
</div>

<!-- Week 8 -->
<div class="bg-primary mt-4 text-white py-4 rounded">
    <div class="container text-center">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">This Week 8's Assingnement</h1>
    </div>
</div>
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-database-fill display-4 text-primary mb-3"></i>
                <h4>CRUD System</h4>
                <p>Implemented full Create, Read, Update, Delete with Laravel Resource Controller.</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-image-fill display-4 text-primary mb-3"></i>
                <h4>Image Upload</h4>
                <p>Users can upload and display image with validation and storage!</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-card-checklist display-4 text-primary mb-3"></i>
                <h4>Form Validation</h4>
                <p>All forms are validated both client-side and server-side 🚀</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card p-4 shadow-sm animate__animated animate__fadeInUp">
                <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                <h4>Easy Demo</h4>
                <p>All CRUD routes are Free no need to login to Demo the CRUD🔐</p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <a href="{{ route('crud.home') }}" class="btn btn-primary btn-lg glow-button animate__animated animate__pulse animate__infinite">Try CRUD Demo 🚀</a>
    </div>
    

</div>
<div class="container py-5">
    <h2 class="text-center mb-4 text-primary fw-bold">📰 Latest Feature</h2>
        <div class="row text-center">
            @forelse ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm animate__animated animate__fadeInUp">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" style="max-height: 200px; object-fit: cover;" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">See detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No Feature yet! 🚀</p>
            @endforelse
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
