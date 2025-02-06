@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <h1 class="mb-4">All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add New Post</a>

    @if ($posts->count() > 0)
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <div>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="alert alert-warning">No posts available.</p>
    @endif
@endsection
