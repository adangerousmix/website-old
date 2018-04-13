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

        return view('pages.home', compact(['posts']));
    }
}
