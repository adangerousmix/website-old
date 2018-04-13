@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <h1>Create Post</h1>
    <form action="/posts/store" method="post">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="audio">Audio</label>
            <input type="text" class="form-control" name="audio" id="audio">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control">
                <option value="Movies">Movies</option>
                <option value="Comics">Comics</option>
                <option value="TV">TV</option>
                <option value="Podcast">Podcast</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Draft">Draft</option>
                <option value="Published">Published</option>
                <option value="Archived">Archived</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn">Cancel</a>
        </div>
    </form>
@endsection