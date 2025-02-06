@extends('layouts.app')

@section('title', 'Add New Post')

@section('content')
    <h1>Add New Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Post Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Content:</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save Post</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection
