@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
    <h1>{{ $post->title }}</h1>
    {!! Markdown::convertToHtml($post->body) !!}
    <p>Tags: 
        @foreach($post->tags->pluck('name')->all() as $tag)
            <small class="mr-2"><a href="/tag/{{ $tag }}">{{ $tag }}</a></small>
        @endforeach
    </p>
@endsection