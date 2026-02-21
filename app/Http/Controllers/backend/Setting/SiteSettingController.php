<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SweetAlert2\Laravel\Swal;

class SiteSettingController extends Controller
{
    // Show settings page
    public function index()
    {
        $metaTitle = 'Site Settings';
        $setting = SiteSetting::first();
        return view('backend.settings.index', compact('setting', 'metaTitle'));
    }

    // Store / Update settings
    public function store(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string|max:255',
            'logo_light' => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'logo_dark'  => 'nullable|image|mimes:png,jpg,jpeg,svg',
            'favicon'    => 'nullable|image|mimes:png,ico,jpg,jpeg',
            'footer_text' => 'nullable|string|max:255',
        ]);

        $setting = SiteSetting::firstOrCreate([]);

        if ($request->hasFile('logo_light')) {
            if ($setting->logo_light) {
                Storage::delete('public/' . $setting->logo_light);
            }
            $setting->logo_light = $request->file('logo_light')
                ->store('settings', 'public');
        }

        if ($request->hasFile('logo_dark')) {
            if ($setting->logo_dark) {
                Storage::delete('public/' . $setting->logo_dark);
            }
            $setting->logo_dark = $request->file('logo_dark')
                ->store('settings', 'public');
        }

        if ($request->hasFile('favicon')) {
            if ($setting->favicon) {
                Storage::delete('public/' . $setting->favicon);
            }
            $setting->favicon = $request->file('favicon')
                ->store('settings', 'public');
        }

        $setting->footer_text = $request->footer_text;
        $setting->site_title = $request->site_title;
        $setting->save();

        Swal::success([
            'title' => 'Website settings updated successfully!',
        ]);

        return back();
    }
}
