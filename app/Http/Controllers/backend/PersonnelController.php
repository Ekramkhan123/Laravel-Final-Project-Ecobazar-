<?php

namespace App\Http\Controllers\backend;

use App\Models\Personnel;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Http\Controllers\Controller;

class PersonnelController extends Controller
{
    // Show list of personnels
    public function index()
    {
        $metaTitle = 'Company Personnel';
        $personnels = Personnel::latest()->get();
        return view('backend.personnel.index', compact('personnels', 'metaTitle'));
    }

    // Show form to add new personnel
    public function create()
    {
        $metaTitle = 'Add New Personnel';
        return view('backend.personnel.create', compact('metaTitle'));
    }

    // Store new personnel
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_personnel.'.$file->getClientOriginalExtension();
            $file->storeAs('personnels', $filename, 'public');
            $data['image'] = $filename;
        }

        Personnel::create($data);

        Swal::success(['title' => 'Personnel added successfully!']);
        return redirect()->route('dashboard.personnel.index');
    }

    // Show edit form
    public function edit($id)
    {
        $metaTitle = 'Update Personnel';
        $personnel = Personnel::findOrFail($id);
        return view('backend.personnel.edit', compact('personnel', 'metaTitle'));
    }

    // Update personnel
    public function update(Request $request, $id)
    {
        $personnel = Personnel::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'_personnel.'.$file->getClientOriginalExtension();
            $file->storeAs('personnels', $filename, 'public');
            $data['image'] = $filename;
        } else {
            $data['image'] = $personnel->image;
        }

        $personnel->update($data);

        Swal::success(['title' => 'Personnel updated successfully!']);
        return redirect()->route('dashboard.personnel.index')->with('success', 'Personnel updated successfully!');
    }

    // Delete personnel
    public function destroy($id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        Swal::success(['title' => 'Personnel deleted successfully!']);
        return redirect()->route('dashboard.personnel.index');
    }
}
