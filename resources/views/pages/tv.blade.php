@extends('layouts.app')

@section('content')
    <h2>TV</h2>
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection