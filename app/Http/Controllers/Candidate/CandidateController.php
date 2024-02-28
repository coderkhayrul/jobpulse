<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{

    public function dashboard()
    {
        return view('frontend.candidate.dashboard');
    }

    public function myProfile()
    {
        return view('frontend.candidate.my-profile');
    }

    public function changePassword()
    {
        return view('frontend.candidate.change-password');
    }

    public function myResume()
    {
        return view('frontend.candidate.my-resume');
    }

    public function manageJobs()
    {
        return view('frontend.candidate.manage-jobs');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.home');
    }

    public function applyJob()
    {
        return view('frontend.candidate.apply-job');
    }
}
