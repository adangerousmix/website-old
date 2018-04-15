<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function home()
    {
        $posts = Post::paginate(4);

        $popular = Post::orderBy('view_count', 'desc')->limit(3)->get();

        return view('pages.home', compact(['popular', 'posts']));
    }
}
