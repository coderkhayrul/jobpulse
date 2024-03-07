<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function generalSetting()
    {
        $setting = GeneralSetting::first();
        return view('admin.generalSetting', compact('setting'));
    }

    public function generalSettingUpdate(Request $request)
    {
        $this->validate($request, [
            'site_title' => 'required',
            'site_email' => 'required|email',
            'site_phone' => 'required',
            'site_address' => 'required',
        ]);

        if ($request->hasFile('site_logo')) {
            $image = '';
        } else {
            $image = GeneralSetting::first()->site_logo;
        }

        return $image;
    }
}
