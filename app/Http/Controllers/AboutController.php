<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        // Get all about page settings
        $settings = Setting::where('group', 'about')
            ->get()
            ->keyBy('key');

        return view('about', compact('settings'));
    }
}

