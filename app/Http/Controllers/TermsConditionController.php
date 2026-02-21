<?php

namespace App\Http\Controllers;

use App\Traits\HasMeta;
use Illuminate\Http\Request;
use App\Models\TermsCondition;
use App\Models\Contact\Contact;
use App\Models\Product\Product;
use App\Models\Category\Category;

class TermsConditionController extends Controller
{
    use HasMeta;
    
    public function show()
    {
        $categories = Category::get();
        $product = Product::inRandomOrder()->first();
        $contacts = Contact::with(['emails', 'numbers'])->get();
        $terms = TermsCondition::first();
        $metaTitle = 'Our Terms & Conditions';
        return view('frontend.terms', compact('terms', 'categories', 'product', 'contacts', 'metaTitle'));
    }

    public function index()
    {
        $metaTitle = 'Terms & Conditions';
        $terms = TermsCondition::first();
        return view('backend.terms.index', compact('terms', 'metaTitle'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $terms = TermsCondition::first();
        if (!$terms) {
            TermsCondition::create(['content' => $request->content]);
        } else {
            $terms->update(['content' => $request->content]);
        }

        return redirect()->route('dashboard.terms.index')->with('success', 'Terms updated successfully!');
    }
}
