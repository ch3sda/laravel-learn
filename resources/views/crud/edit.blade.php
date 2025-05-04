@extends('layouts.guest')

@section('title', 'Edit Post')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">✏️ Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $post->content }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Image</label>
            @if ($post->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $post->image) }}" width="120">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <div class="text-end">
            <a href="{{ route('crud.home') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">💾 Update</button>
        </div>
    </form>
</div>
@endsection
