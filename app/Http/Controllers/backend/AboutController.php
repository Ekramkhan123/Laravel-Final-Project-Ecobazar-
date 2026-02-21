<?php

namespace App\Http\Controllers\backend;

use App\Models\About;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $metaTitle = 'Add About Information';
        $about = About::first();
        return view('backend.about.index', compact('about', 'metaTitle'));
    }

    public function create()
    {
        return view('backend.about.edit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titleone' => 'required|string|max:255',
            'titletwo' => 'nullable|string|max:255',
            'titlethree' => 'nullable|string|max:255',
            'imageone' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'imagetwo' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'imagethree' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'descriptionone' => 'nullable|string',
            'descriptiontwo' => 'nullable|string',
            'descriptionthree' => 'nullable|string',
        ]);

    foreach (['imageone', 'imagetwo', 'imagethree'] as $img) {
        if ($request->hasFile($img)) {
            $file = $request->file($img);
            $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();
            $file->storeAs('About', $name, 'public');
            $data[$img] = $name;
        } else if(isset($about)) {
            $data[$img] = $about->$img;
        }
    }


        About::create($data);

        Swal::success(['title' => 'About page created successfully!']);
        return redirect()->route('dashboard.about.show');
    }

    public function edit($id)
    {
        $metaTitle = 'Update About Information';
        $about = About::findOrFail($id);
        return view('backend.about.edit', compact('about', 'metaTitle'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $data = $request->validate([
            'titleone' => 'required|string|max:255',
            'titletwo' => 'nullable|string|max:255',
            'titlethree' => 'nullable|string|max:255',
            'imageone' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'imagetwo' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'imagethree' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp',
            'descriptionone' => 'nullable|string',
            'descriptiontwo' => 'nullable|string',
            'descriptionthree' => 'nullable|string',
        ]);

        foreach (['imageone', 'imagetwo', 'imagethree'] as $img) {
            if ($request->hasFile($img)) {
                $file = $request->file($img);
                $name = time().'_'.$img.'.'.$file->getClientOriginalExtension();
                $file->storeAs('About', $name, 'public');
                $data[$img] = $name;
            } else if(isset($about)) {
                $data[$img] = $about->$img;
            }
        }


        $about->update($data);

        Swal::success(['title' => 'About page edited successfully!']);
        return redirect()->route('dashboard.about.show');
    }

    public function show()
    {
        $metaTitle = 'About';
        $about = About::first();
        return view('backend.about.show', compact('about', 'metaTitle'));
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        Swal::success(['title' => 'Personnel deleted successfully!']);
        return redirect()->route('dashboard.about.show')->with('success', 'Personnel deleted successfully!');
    }
}
