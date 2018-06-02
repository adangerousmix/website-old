@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    {!! Markdown::convertToHtml($post->body) !!}
@endsection