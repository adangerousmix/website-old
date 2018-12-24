@extends('layouts.app')

@section('content')
    <h2>Tag: {{ $tag }}</h2>
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection