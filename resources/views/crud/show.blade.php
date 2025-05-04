@extends('layouts.guest')

@section('title', 'Post Detail')

@section('content')
<div class="container py-5">
    <div class="card shadow p-4">
        <h1 class="mb-3 text-primary">{{ $post->title }}</h1>

        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded mb-4" style="max-height: 300px;" alt="Post image">
        @endif

        <p class="lead">{{ $post->content }}</p>

        <div class="mt-4">
            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">✏️ Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this post?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger">🗑️ Delete</button>
            </form>
            <a href="{{ route('crud.home') }}" class="btn btn-secondary">⬅️ Back</a>
        </div>
    </div>
</div>
@endsection
