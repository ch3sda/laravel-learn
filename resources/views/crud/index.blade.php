@extends('layouts.guest')

@section('title', 'CRUD Dashboard')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-primary text-center">🚀 CRUD Dashboard</h1>

    <div class="text-end mb-3">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">➕ Create New Post</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Content</th>
                <th width="200">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" width="100">
                        @else
                            <small>No image</small>
                        @endif
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50) }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No posts yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
