@extends('layouts.app')

@section('content')
    <h2>Movies</h2>
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection