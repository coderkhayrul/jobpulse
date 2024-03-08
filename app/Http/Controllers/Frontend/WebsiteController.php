<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Blog;
use App\Models\Page;
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
        $positions = Position::all();
        $pages = Page::all();
        return view('frontend.home', compact('jobs', 'categories', 'positions', 'pages'));
    }

    public function jobs()
    {
        $jobs = Job::get();
        $categories = Category::limit(4)->get();
        return view('frontend.jobs', compact('jobs', 'categories'));
    }
    public function singleJob($slug)
    {
        $job = Job::where('slug', $slug)->first();
        return view('frontend.singleJob', compact('job'));
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

    public function allCategory()
    {
        $categories = Category::all();
        return view('frontend.Categories', compact('categories'));
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

    public function singlePage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.singlePage', compact('page'));
    }
}
