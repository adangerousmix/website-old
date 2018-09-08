@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
    <h1>{{ $post->title }}</h1>
    {!! Markdown::convertToHtml($post->body) !!}
@endsection