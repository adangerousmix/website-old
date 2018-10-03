<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Assure slug doesn't already exist.
        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'slug' => $request->slug,
            'image' => $request->image,
            'category' => $request->category,
            'status' => $request->status,
            'tags' => explode(', ', $request->tags)
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post = Post::where('id', '=', $post)->with('tags')->first();

        $post->increment('view_count');

        return view('posts.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = Post::where('id', '=', $post)->with('tags')->first();

        return view('posts.edit', compact(['post']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->image = $request->image;
        $post->category = $request->category;
        $post->status = $request->status;

        $post->syncTags(explode(', ', $request->tags));

        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
