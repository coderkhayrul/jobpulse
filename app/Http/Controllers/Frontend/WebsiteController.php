<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home()
    {
         $jobs = Job::all();
        $categories = Category::all();
        $positions =Position::all();
        return view('frontend.home', compact('jobs','categories', 'positions'));
    }

    public function jobs()
    {
          $jobs = Job::get();
        return view('frontend.jobs',compact('jobs'));
    }
    public function blogs()
    {
         $blogs = Blog::get();
        return view('frontend.blogs', compact('blogs'));
        
    }
    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.singleBlog', compact('blog'));

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
