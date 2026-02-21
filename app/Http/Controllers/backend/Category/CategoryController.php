<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function categoryIndex()
    {
        $allCategory = Category::select('id', 'title')->get();
        $metaTitle = 'Category Create';
        return view('backend.category.index', compact('allCategory','metaTitle'));
    }

    //*Store
    public function categoryStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->parent_id = $request->state;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;

        if ($request->hasFile('meta_image')) {
            $image = $request->file('meta_image');
            $uniName = 'category-' . time() . '.' . $image->getClientOriginalName();
            $image->storeAs('Category/', $uniName, 'public');
            $category->image = $uniName;
        }
        
        $category->save(); 
        
        Swal::success([
            'title' => 'Category created successfully!',
        ]);
        return back();
    }

    //*Show
    public function categoryShow(Request $request)
    {
        $categories = Category::with('subCategories')->latest()->simplePaginate(10);
        $metaTitle = 'All Categories';
        return view('backend.category.show', compact('categories','metaTitle'));
    }

    //*Edit
    public function categoryEdit($id)
    {
        $edit_category = Category::find($id);
        $allCategory = Category::select('id', 'title')->get();
        $metaTitle = 'Edit Categories';
        
        return view ('backend.category.edit', compact('edit_category','allCategory','metaTitle'));
    }

    //*Update

    public function categoryUpdate(Request $request, $id)
    {
        $update_category = Category::find($id);

        $update_category->meta_description = $request->meta_description;
        $update_category->title = $request->title;
        $update_category->parent_id = $request->state;
        $update_category->status = $request->status;
        $update_category->meta_title = $request->meta_title;
        $update_category->meta_description = $request->meta_description;

        if ($request->hasFile('meta_image')) {
            $image = $request->file('meta_image');
            $uniName = 'category-' . time() . '.' . $image->getClientOriginalName();
            $image->storeAs('Category/',$uniName,'public');
            $update_category->image = $uniName;
        }
        
        $update_category->save();
        Swal::success(['title' => 'Category Updated Successfully!']);
        return redirect()->route('dashboard.category.show');
    }

    //*Delete
    public function categoryDelete($id)
    {
        $delete_category = Category::find($id);
        $delete_category->delete();

        Swal::success([
            'title' => 'Category deleted successfully!',
        ]);
        return redirect()->route('dashboard.category.show');
    }
}
