<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display contact settings form
     */
    public function contact()
    {
        $settings = Setting::where('group', 'contact')
            ->orWhere('group', 'social')
            ->get()
            ->keyBy('key');

        return view('admin.settings.contact', compact('settings'));
    }

    /**
     * Update contact settings
     */
    public function updateContact(Request $request)
    {
        $validated = $request->validate([
            'contact_title' => 'required|string|max:255',
            'contact_description' => 'required|string|max:1000',
            'contact_email_primary' => 'required|email|max:255',
            'contact_email_secondary' => 'nullable|email|max:255',
            'contact_phone' => 'required|string|max:255',
            'contact_phone_hours' => 'required|string|max:255',
            'contact_office_address_line1' => 'required|string|max:255',
            'contact_office_address_line2' => 'required|string|max:255',
            'social_twitter_url' => 'nullable|url|max:255',
            'social_linkedin_url' => 'nullable|url|max:255',
            'contact_faq_title' => 'required|string|max:255',
            'contact_faq_description' => 'required|string|max:1000',
        ]);

        foreach ($validated as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()
            ->route('admin.settings.contact')
            ->with('success', 'Contact settings updated successfully!');
    }

    /**
     * Display about page settings form
     */
    public function about()
    {
        $settings = Setting::where('group', 'about')
            ->get()
            ->keyBy('key');

        return view('admin.settings.about', compact('settings'));
    }

    /**
     * Update about page settings
     */
    public function updateAbout(Request $request)
    {
        $validated = $request->validate([
            'about_hero_title' => 'required|string|max:255',
            'about_hero_subtitle' => 'required|string|max:500',
            'about_story_title' => 'required|string|max:255',
            'about_story_paragraph1' => 'required|string|max:1000',
            'about_story_paragraph2' => 'required|string|max:1000',
            'about_story_paragraph3' => 'required|string|max:1000',
            'about_mission_title' => 'required|string|max:255',
            'about_mission_content' => 'required|string|max:1000',
            'about_vision_title' => 'required|string|max:255',
            'about_vision_content' => 'required|string|max:1000',
            'about_values_title' => 'required|string|max:255',
            'about_values_subtitle' => 'required|string|max:500',
            'about_value1_title' => 'required|string|max:255',
            'about_value1_content' => 'required|string|max:500',
            'about_value2_title' => 'required|string|max:255',
            'about_value2_content' => 'required|string|max:500',
            'about_value3_title' => 'required|string|max:255',
            'about_value3_content' => 'required|string|max:500',
            'about_value4_title' => 'required|string|max:255',
            'about_value4_content' => 'required|string|max:500',
            'about_value5_title' => 'required|string|max:255',
            'about_value5_content' => 'required|string|max:500',
            'about_value6_title' => 'required|string|max:255',
            'about_value6_content' => 'required|string|max:500',
            'about_why_title' => 'required|string|max:255',
            'about_why_subtitle' => 'required|string|max:500',
            'about_stat1_value' => 'required|string|max:50',
            'about_stat1_label' => 'required|string|max:255',
            'about_stat2_value' => 'required|string|max:50',
            'about_stat2_label' => 'required|string|max:255',
            'about_stat3_value' => 'required|string|max:50',
            'about_stat3_label' => 'required|string|max:255',
            'about_stat4_value' => 'required|string|max:50',
            'about_stat4_label' => 'required|string|max:255',
            'about_cta_title' => 'required|string|max:255',
            'about_cta_subtitle' => 'required|string|max:500',
        ]);

        foreach ($validated as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()
            ->route('admin.settings.about')
            ->with('success', 'About page settings updated successfully!');
    }
}
