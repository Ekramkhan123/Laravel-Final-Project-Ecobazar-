<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function edit()
    {
        $metaTitle = 'Privacy Policy';
        $policy = PrivacyPolicy::first();
        return view('backend.privacy.edit', compact('policy', 'metaTitle'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $policy = PrivacyPolicy::first();
        if ($policy) {
            $policy->update(['content' => $request->content]);
        } else {
            PrivacyPolicy::create(['content' => $request->content]);
        }

        return redirect()->back()->with('success', 'Privacy Policy updated successfully!');
    }
}
