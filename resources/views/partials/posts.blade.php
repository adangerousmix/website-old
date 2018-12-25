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