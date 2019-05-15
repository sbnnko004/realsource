<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\BlogPost;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard.dashboard');
    }

    /**
     * Show the application dashboard/blog_post.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog_post()
    {
        $posts =  BlogPost::all();
        return view('pages.dashboard.blog_post')->with('posts', $posts);
    }
}
