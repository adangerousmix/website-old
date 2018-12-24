@extends('layouts.app')

@section('content')
    <h2>Popular</h2>
    <div class="card-deck mb-4">
        @foreach ($popular as $key => $item)
            <div class="card box-shadow">
                <a href="/posts/{{ $item->id }}">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <p class="mb-0"><small class="text-muted">{{ $item->category }} - {{ $item->created_at }}</small></p>
                        <h2>{{ $item->title }}</h2>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <h2>Latest</h2>
    @include('partials.posts')
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection