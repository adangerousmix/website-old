@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
    <h1 class="mt-4">{{ $post->title }}</h1>
    <small class="text-muted mb-4 d-block">{{ $post->category }} - {{ $post->created_at }}</small>
    {!! Markdown::convertToHtml($post->body) !!}
    <p class="mt-4">Tags: 
        @foreach($post->tags->pluck('name')->all() as $tag)
            <span class="mr-2"><a href="/tag/{{ $tag }}">{{ $tag }}</a></span>
        @endforeach
    </p>
@endsection