@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <h1>Admin</h1>
    <a href="/posts/create" class="btn btn-primary mb-4">Create Post</a>
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <a href="/posts/{{ $post->id }}/edit" class="float-right">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection