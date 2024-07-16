@extends('layouts.user')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Profile</h1>

        @if (session('status') === 'profile-updated')
            <div class="alert alert-success">
                Profile updated successfully.
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <form method="POST" action="{{ route('user.profile.destroy') }}" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">Delete Account</button>
                </form>
            </div>
        </div>
    </div>
@endsection
