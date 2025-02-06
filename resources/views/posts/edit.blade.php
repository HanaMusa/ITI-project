@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center text-primary">Edit Post</h2>

    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Post Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Post Content:</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update Post</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection
