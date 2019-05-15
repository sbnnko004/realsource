<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\BlogPost;

class PagesController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        $posts = BlogPost::orderBy('created_at','desc')->paginate(10);
        return view('pages.blog')->with('posts', $posts);
    }

     /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function blog_post()
    {
        $id = Input::get('post');
       $post = BlogPost::find($id);
       return view('pages.blog_post')->with("post",$post);
    }

         /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function mainpage()
    {
       return view('pages.main.home');
    }

    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('pages.main.about');
    }
    
     //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function freelance()
     {
         return "page coming soon";
     }
     
     //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function how()
     {
         return "page coming soon";
     }
    
    
}
