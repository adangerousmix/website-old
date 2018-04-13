@extends('layouts.app')

@section('content')
    <h2>Popular</h2>
    <div class="card-deck mb-4">
        <div class="card box-shadow">
            <a href="#">
                <img src="https://placehold.it/600x400" class="card-img-top" alt="Placeholder">
                <div class="card-body">
                    <small class="text-muted">April 1, 2018</small>
                    <p>The Legend of the Dark Knight #1</p>
                </div>
            </a>
        </div>
        <div class="card box-shadow">
            <a href="#">
                <img src="https://placehold.it/600x400" class="card-img-top" alt="Placeholder">
                <div class="card-body">
                    <small class="text-muted">April 1, 2018</small>
                    <p>Batman #1</p>
                </div>
            </a>
        </div>
        <div class="card box-shadow">
            <a href="#">
                <img src="https://placehold.it/600x400" class="card-img-top" alt="Placeholder">
                <div class="card-body">
                    <small class="text-muted">April 1, 2018</small>
                    <p>The Flash #1</p>
                </div>
            </a>
        </div>
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