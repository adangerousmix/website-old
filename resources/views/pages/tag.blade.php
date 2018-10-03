@extends('layouts.app')

@section('content')
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection