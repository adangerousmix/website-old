@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article>
        <div class="article-title">
            <img src="{{ $post->image }}" class="card-img-top img-title" alt="{{ $post->title }}">
            <h1 class="mt-4">{{ $post->title }}</h1>
        </div>
        <div class="article-body">
            <small class="text-muted mb-4 d-block">{{ $post->category }} - {{ $post->created_at }}</small>
            @if ($post->audio)
                <audio id="main-audio" controls="controls" preload="none" style="width: 100%;">
                    <source src="{{ $post->audio }}" type="audio/mp3">
                </audio>
            @endif
            {!! Markdown::convertToHtml($post->body) !!}
            <p class="mt-4">
                <strong>Tags:</strong>
                @foreach($post->tags->pluck('name')->all() as $tag)
                    <span class="mr-2"><a href="/tag/{{ $tag }}">{{ $tag }}</a></span>
                @endforeach
            </p>
        </div>
    </article>
@endsection