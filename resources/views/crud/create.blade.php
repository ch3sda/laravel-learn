@extends('layouts.guest')

@section('title', 'Create Post')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">📝 Create a New Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title..." required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Content</label>
            <textarea name="content" class="form-control" rows="5" placeholder="Write something amazing..." required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="text-end">
            <a href="{{ route('crud.home') }}" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">🚀 Create Post</button>
        </div>
    </form>
</div>
@endsection
