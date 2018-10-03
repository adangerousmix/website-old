<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function comics()
    {
        $posts = Post::where('category', 'Comics')
            ->where('status', '=', 'Published')
            ->paginate(4);

        return view('pages.comics', compact(['posts']));
    }

    public function home()
    {
        $posts = Post::where('status', '=', 'Published')
            ->paginate(4);

        $popular = Post::where('status', '=', 'Published')
            ->orderBy('view_count', 'desc')->limit(3)->get();

        return view('pages.home', compact(['popular', 'posts']));
    }

    public function movies()
    {
        $posts = Post::where('category', 'Movies')
            ->where('status', '=', 'Published')
            ->paginate(4);

        return view('pages.movies', compact(['posts']));
    }

    public function podcast()
    {
        $posts = Post::where('category', 'Podcast')
            ->where('status', '=', 'Published')
            ->paginate(4);

        return view('pages.podcast', compact(['posts']));
    }

    public function tv()
    {
        $posts = Post::where('category', 'TV')
            ->where('status', '=', 'Published')
            ->paginate(4);

        return view('pages.tv', compact(['posts']));
    }
}
