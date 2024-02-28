<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function dashboard()
    {
        return view('frontend.company.dashboard');
    }

    public function myProfile()
    {
        $user = Auth::user()->load('profile');
        return view('frontend.company.my-profile', compact('user'));
    }

    public function myProfileStore(Request $request)
    {
        return $request->all();
    }

    public function manageCandidate()
    {
        return view('frontend.company.manage-candidate');
    }

    public function manageJobs()
    {
        return view('frontend.company.manage-jobs');
    }

    public function jobPost()
    {
        return view('frontend.company.job-post');
    }

    public function changePassword()
    {
        return view('frontend.company.change-password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.home');
    }
}
