@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1 class="mb-4">Contact Us 📞</h1>

    <form class="p-4 shadow-sm bg-white rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="John Doe">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary glow-button">Send Message</button>
    </form>
</div>
@endsection
