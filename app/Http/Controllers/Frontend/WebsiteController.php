<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function jobs()
    {
        return view('frontend.jobs');
    }
    public function blogs()
    {
         $blogs = Blog::get();

        return view('frontend.blogs', compact('blogs'));
        
    }
    public function blogShow(Blog $blog)
    {
        return view('frontend.blogShow', compact('blog'));

    }


    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function signOut()
    {
        auth()->logout();
        return redirect()->route('web.home');
    }
}
