<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get all contact and social settings
        $settings = Setting::whereIn('group', ['contact', 'social'])
            ->get()
            ->keyBy('key');

        return view('contact', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Thank you for contacting us! We\'ll get back to you soon.');
    }
}

