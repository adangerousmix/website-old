@extends('layouts.app')

@section('content')
    <h2>Popular</h2>
    <div class="card-deck mb-4">
        @foreach ($popular as $key => $item)
            <div class="card box-shadow">
                <a href="/posts/{{ $item->id }}">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <small class="text-muted">{{ $item->category }} - {{ $item->created_at }}</small>
                        <p>{{ $item->title }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <h2>Latest</h2>
    <div class="row mb-4">
        @foreach ($posts as $key => $post)
            <div class="col-md-6 mb-4">
                <div class="card box-shadow">
                    <a href="/posts/{{ $post->id }}">
                        <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <small class="text-muted">{{ $post->category }} - {{ $post->created_at }}</small>
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <nav>
        {{ $posts->links() }}
    </nav>
@endsection