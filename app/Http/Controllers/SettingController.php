<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function index()
    {

    }

    public function website()
    {
        return view('admin.settings.website');
    }

    public function server()
    {
        return view('admin.settings.server');
    }

    public function website_store(Request $request)
    {
        $rules = [
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);

        $websitename = $request->input('websitename');
        if (!empty($websitename)) {
            setting()->set('websitename', $websitename);
        }

        if ($request->hasFile('logo')) {
            $destinationPath = public_path('/images');
            $logo = $request->file('logo');
            $name = "logo." . $logo->getClientOriginalExtension();

            $logo = Image::make($logo->getRealPath());              
            $logo->resize(70, 65);
            $logo->save(public_path('images/' . $name));

            setting()->set('logo', $name);
        }

        setting()->save();

        return view('admin.settings.website');
    }

    public function server_store(Request $request)
    {
        $rules = [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $this->validate($request, $rules);

        $websitename = $request->input('websitename');
        if (!empty($websitename)) {
            setting()->set('websitename', $websitename);
        }

        if ($request->hasFile('logo')) {
            $destinationPath = public_path('/images');
            $logo = $request->file('logo');
            $name = "logo." . $logo->getClientOriginalExtension();

            $logo = Image::make($logo->getRealPath());              
            $logo->resize(70, 65);
            $logo->save(public_path('images/' . $name));

            setting()->set('logo', $name);
        }

        setting()->save();

        return view('admin.settings.index');
    }
}
