<?php

namespace App\Http\Controllers\Company;

use App\Models\JobType;
use App\Models\Category;
use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class CompanyController extends Controller
{
    public function dashboard()
    {
         $jobs = Auth::user()->jobs()->latest()->paginate(5);
       
        return view('frontend.company.dashboard' , compact('jobs'));
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
        $jobs = Auth::user()->jobs()->latest()->paginate(10);
        return view('frontend.company.manage-jobs', compact('jobs'));
    }

    public function jobPost()
    {
        $jobTypes = JobType::all();
        $categories = Category::all();
        $positions = Position::all();
        return view('frontend.company.job-post', compact('jobTypes', 'categories', 'positions'));
    }

    public function jobPostStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'job_type_id' => 'required',
            'position_id' => 'required',
            'expireDate' => 'required',
            'description' => 'required',
            'salaryType' => 'required',
            'minSalary' => 'required',
            'maxSalary' => 'required',
            'currency' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'address' => 'required',
        ]);

        Auth::user()->jobs()->create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'job_type_id' => $request->job_type_id,
            'position_id' => $request->position_id,
            'expireDate' => Carbon::parse($request->expireDate)->format('m-d-Y'),
            'description' => $request->description,
            'salaryType' => $request->salaryType,
            'minSalary' => $request->minSalary,
            'maxSalary' => $request->maxSalary,
            'currency' => $request->currency,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'gender' => $request->gender,
            'country' => $request->country,
            'address' => $request->address,
        ]);

        return redirect()->back();
    }

    public function changePasswordPage()
    {
        return view('frontend.company.change-password');
    }
     public function changePassword(Request $request)
    {
        $request->validate([
        'current_password' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

      $user = auth()->user();

      if (!Hash::check($request->current_password, $user->password)) {
        throw ValidationException::withMessages(['current_password' => 'The provided current password is incorrect.']);
       }

      $user->update([
        'password' => Hash::make($request->password),
      ]);

      return redirect()->route('company.dashboard')->withMessages('success', 'Password changed successfully.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('web.home');
    }
}


    
