@extends('layouts.app')

@section('title', 'Create Post')

@section('scripts')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>$('#image').filemanager('image', {prefix: "/bin"});</script>
<script>$('#podcast').filemanager('file', {prefix: "/bin"});</script>
@endsection

@section('content')
    <h1>Create Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/posts/store" method="post">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="image" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image" value="{{ old('image') }}">
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
                <input id="audio" class="form-control" type="text" name="audio" value="{{ old('audio') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="Movies" @if (old('category') == 'Movies') selected @endif>Movies</option>
                <option value="Comics" @if (old('category') == 'Comics') selected @endif>Comics</option>
                <option value="TV" @if (old('category') == 'TV') selected @endif>TV</option>
                <option value="Podcast" @if (old('category') == 'Podcast') selected @endif>Podcast</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" class="form-control" name="tags" id="tags" value="{{ old('tags') }}">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" value="{{ old('status') }}">
                <option value="Draft" @if (old('status') == 'Draft') selected @endif>Draft</option>
                <option value="Published" @if (old('status') == 'Published') selected @endif>Published</option>
                <option value="Archived" @if (old('status') == 'Archived') selected @endif>Archived</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn">Cancel</a>
        </div>
    </form>
@endsection