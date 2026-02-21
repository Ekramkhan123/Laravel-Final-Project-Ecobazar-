<?php

namespace App\Http\Controllers\backend;

use App\Models\Faq;
use App\Models\Faqimage;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function faqIndex()
    {
        $metaTitle = 'Add Faqs';
        $faq = Faq::select('id', 'question')->get();
        return view('backend.faqs.index', compact('faq', 'metaTitle'));
    }

    //*Store
    public function faqStore(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answers = $request->answers;

        $faq->save();

        Swal::success([
            'title' => 'FAQ created successfully!',
        ]);
        return back();
    }

    //*Show
    public function faqShow(Request $request)
    {
        $metaTitle = 'Frequently Asked Questions';
        $faq = Faq::latest()->simplePaginate(10);
        $faqimage = Faqimage::latest()->first();

        return view('backend.faqs.show', compact('faq', 'faqimage', 'metaTitle'));
    }

    //*Edit
    public function faqEdit($id)
    {
        $metaTitle = 'Update Faqs';
        $edit_faq = Faq::find($id);

        return view ('backend.faqs.edit', compact('edit_faq', 'metaTitle'));
    }

    //*Update
    public function faqUpdate(Request $request, $id)
    {
        $update_faq = Faq::find($id);

        $update_faq->question = $request->question;
        $update_faq->answers = $request->answers;

        $update_faq->save();
        Swal::success(['title' => 'FAQ Updated Successfully!']);
        return redirect()->route('dashboard.faq.show');
    }

    //*Delete
    public function faqDelete($id)
    {
        $delete_faq = Faq::find($id);
        $delete_faq->delete();
        Swal::success([
            'title' => 'FAQ deleted successfully!',
        ]);
        return redirect()->route('dashboard.faq.show');
    }

    //*Faq Image
    public function faqImage()
    {
        $metaTitle = 'Add Faqs Image';
        $faqimage = Faqimage::select('id', 'image')->get();
        return view('backend.faqs.image', compact('faqimage', 'metaTitle'));
    }

    //*Store
    public function faqImageStore(Request $request)
    {
        $metaTitle = 'Faqs Image';

        $faqimage = new Faqimage();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniName = 'faqs-' . time() . '.' . $image->getClientOriginalName();
            $image->storeAs('Faqs/', $uniName, 'public');
            $faqimage->image = $uniName;
        }
        $faqimage->save();

        Swal::success(['title' => 'FAQ image created successfully!']);
        return redirect()->route('dashboard.faq.show', compact( 'metaTitle'));
    }

    //*Edit
    public function faqImageEdit()
    {
        $metaTitle = 'Update Faqs Image';
        $edit_faqimage = Faqimage::latest()->first();

        return view('backend.faqs.imageedit', compact('edit_faqimage', 'metaTitle'));
    }

    //*Update
    public function faqImageUpdate(Request $request)
    {

        $update_faqimage = Faqimage::latest()->first() ?? new Faqimage();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniName = 'faqs-' . time() . '.' . $image->getClientOriginalName();
            $image->storeAs('Faqs/', $uniName, 'public');
            $update_faqimage->image = $uniName;
        }

        $update_faqimage->save();

        Swal::success(['title' => 'FAQ image updated successfully!']);
        return redirect()->route('dashboard.faq.show');
    }

}
