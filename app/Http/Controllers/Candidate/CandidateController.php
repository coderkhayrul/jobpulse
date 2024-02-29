<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{

    public function dashboard()
    {
        return view('frontend.candidate.dashboard');
    }

    public function myProfile()
    {
        $user = Auth::user()->load('profile');
        return view('frontend.candidate.my-profile', compact('user'));
    }

    public function myProfileStore(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'mobile' => 'required|numeric|unique:users,mobile,' . Auth::id(),
            'gender' => 'required',
            'country' => 'required',
            'dateOfBirth' => 'required',
            'salary' => 'required',
            'address' => 'required',
        ]);

        if (Auth::user()->profile) {
            Auth::user()->update([
                'name' => $request->firstName . ' ' . $request->lastName,
                'mobile' => $request->mobile,
            ]);
            Auth::user()->profile->update([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'title' => $request->title,
                'dateOfBirth' => Carbon::parse($request->dateOfBirth)->format('m-d-Y'),
                'gender' => $request->gender,
                'country' => $request->country,
                'salary' => $request->salary,
                'address' => $request->address,
                'socialFacebook' => $request->socialFacebook,
                'socialTwitter' => $request->socialTwitter,
                'socialLinkedin' => $request->socialLinkedin,
                'details' => $request->details,
            ]);
        } else {
            Auth::user()->update([
                'name' => $request->firstName . ' ' . $request->lastName,
                'mobile' => $request->mobile,
            ]);
            Auth::user()->profile()->create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'title' => $request->title,
                'dateOfBirth' => Carbon::parse($request->dateOfBirth)->format('m-d-Y'),
                'gender' => $request->gender,
                'country' => $request->country,
                'salary' => $request->salary,
                'address' => $request->address,
                'socialFacebook' => $request->socialFacebook,
                'socialTwitter' => $request->socialTwitter,
                'socialLinkedin' => $request->socialLinkedin,
                'details' => $request->details,
            ]);
        }
        return redirect()->back();
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
