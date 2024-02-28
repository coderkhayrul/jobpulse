<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('frontend.blogs');
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
