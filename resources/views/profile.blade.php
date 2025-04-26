@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <h1>My Profile</h1>

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Profile Information</h5>
            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{ Auth::user()->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" value="{{ Auth::user()->email }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
