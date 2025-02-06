@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection
