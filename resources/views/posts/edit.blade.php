@extends('layouts.app')

@section('title', 'Create Post')

@section('scripts')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>$('#image').filemanager('image', {prefix: "/bin"});</script>
<script>$('#podcast').filemanager('file', {prefix: "/bin"});</script>
@endsection

@section('content')
    <h1>Edit Post</h1>
    {{ Form::model($post, ['url' => ['posts', $post->id], 'method' => 'put']) }}
    <input type="hidden" name="_method" value="put">
    {{ Form::close() }}

    <form action="/posts/{{ $post->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="image" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $post->image }}">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
        <div class="form-group">
            <label for="audio">Audio</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="podcast" data-input="audio" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="audio" class="form-control" type="text" name="audio">
            </div>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="Movies" {{ ($post->category == 'Movies') ? 'selected' : '' }}>Movies</option>
                <option value="Comics" {{ ($post->category == 'Comics') ? 'selected' : '' }}>Comics</option>
                <option value="TV" {{ ($post->category == 'TV') ? 'selected' : '' }}>TV</option>
                <option value="Podcast" {{ ($post->category == 'Podcast') ? 'selected' : '' }}>Podcast</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Draft" {{ ($post->status == 'Draft') ? 'selected' : '' }}>Draft</option>
                <option value="Published" {{ ($post->status == 'Published') ? 'selected' : '' }}>Published</option>
                <option value="Archived" {{ ($post->status == 'Archived') ? 'selected' : '' }}>Archived</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn">Cancel</a>
        </div>
    </form>
@endsection