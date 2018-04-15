@extends('layouts.app')

@section('content')
    <h2>Podcast</h2>
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection