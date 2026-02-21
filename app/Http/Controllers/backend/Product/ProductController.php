<?php

namespace App\Http\Controllers\Backend\Product;

use App\Models\Image\Image;
use App\Models\Product\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;
use App\Models\Product\Product;
use App\Models\Category\Category;
use App\Http\Controllers\Controller;
use App\Models\Product\ProductAdditionalInfo;

class ProductController extends Controller
{
    //* product index
    public function productIndex(){
        $categories = Category::get();
        $tags = Tag::get();
        $metaTitle = 'Add New Product';
        return view('backend.product.index', compact('categories', 'tags', 'metaTitle'));
    }

    //*store
    public function productCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'stock' => 'required|integer',
            'tags' => 'nullable|array',
            'tags.*' => 'required|string|max:255',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        
        $product->slug = 'product-' . time() . '-' . Str::slug($request->title); 
        
        $product->price = $request->price;
        $product->dis_price = $request->dis_price;
        $product->is_stock = $request->stock;
        $product->status = $request->status;
        $product->description = $request->descriptions;
        $product->features = $request->features;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        
        $product->save();

        ProductAdditionalInfo::create([
            'product_id' => $product->id,
            'weight' => $request->weight,
            'color' => $request->color,
            'type' => $request->type,
        ]);

        if (!empty($request->tags)) {
            $tagNames = array_filter(array_unique($request->tags));

            $existingTagIds = Tag::whereIn('name', $tagNames)->pluck('id')->toArray();

            $foundTagNames = Tag::whereIn('name', $tagNames)->pluck('name')->toArray();
            $newTagNames = array_diff($tagNames, $foundTagNames);

            $newTagIds = [];
            foreach ($newTagNames as $tagName) {

                $newTag = Tag::create([
                    'name' => $tagName,
                    'slug' => Str::slug($tagName), 
                ]);
                $newTagIds[] = $newTag->id;
            }

            $allTagIds = array_merge($existingTagIds, $newTagIds);

            $product->tags()->attach($allTagIds);
        }

        Swal::success(['title' => 'New Product Created Successfully!']);
        return back();
    }

    //*show
    public function productShow()
    {
        $products = Product::with(['tags', 'additionalInfo'])
            ->simplePaginate(5);
        $metaTitle = 'Product Details';

        return view('backend.product.show', compact('products', 'metaTitle'));
    }


    //*edit
    public function productEdit($id){
        $categories = Category::get();
        $tags = Tag::get();
        $metaTitle = 'product Update';
        $editProduct = Product::with('tags')->find($id);

        if (!$editProduct) {
        abort(404);
        }

        return view('backend.product.edit', compact('categories', 'tags', 'editProduct', 'metaTitle'));
    }

    //*update
    public function productUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'status' => 'required',
            'stock' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $tagNames = $request->input('tags', []);

        $existingTagIds = Tag::whereIn('name', $tagNames)->pluck('id')->toArray();
        $foundTagNames = Tag::whereIn('name', $tagNames)->pluck('name')->toArray();
        $newTagNames = array_diff($tagNames, $foundTagNames);

        $newTagIds = [];
        foreach ($newTagNames as $tagName) {
            if (!empty($tagName)) {
                $tag = Tag::firstOrCreate(
                    ['name' => $tagName],
                    ['slug' => Str::slug($tagName)]
                );

                $newTagIds[] = $tag->id;
            }
        }

        $allTagIds = array_merge($existingTagIds, $newTagIds);
        $product->tags()->sync($allTagIds);

        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->dis_price = $request->dis_price;
        $product->is_stock = $request->stock;
        $product->status = $request->status;
        $product->description = $request->descriptions;
        $product->features = $request->features;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->save();

        $product->additionalInfo()->updateOrCreate(
            ['product_id' => $product->id],
            [
                'weight' => $request->weight,
                'color' => $request->color,
                'type' => $request->type,
            ]
        );

        Swal::success(['title' => 'Product Updated Successfully!']);
        return redirect()->route('dashboard.product.show');
    }


    //*delete
    public function productDelete($id){
        $product = Product::find($id);
        $product->delete();
        Swal::success([
            'title' => ' Product Deleted Successfully!',
        ]);
        return redirect()->route('dashboard.product.show');
    }

    //*image upload
    public function productImage(){
        $products = Product::select('id', 'title')->get();
        $metaTitle = 'Product Images Upload';
        return view('backend.product.image', compact('products', 'metaTitle'));
    }

    //*image store
    public function productImagesStore(Request $request)
        {
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'images' => 'required',
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $imageFile) {
                    $uniName = 'product-' . time() . '-' . uniqid() . '.' . $imageFile->getClientOriginalExtension();

                    $path = $imageFile->storeAs('Product', $uniName, 'public');

                    Image::create([
                        'product_id' => $request->product_id,
                        'image' => $path,
                    ]);
                }
            }

            Swal::success([
                'title' => ' Images Uploaded Successfully!',
            ]);

            return redirect()->route('dashboard.product.image.show');
        }

        //*image show
        public function productImageShow(){
            $images = Product::with('images')->simplePaginate(10);
            $metaTitle = 'Products Images';
            return view('backend.product.imageShow', compact('images', 'metaTitle'));
        }

        //*image edit
        public function productImageEdit($id){
            $products = Product::select('id', 'title')->get();
            $findImages = Product::with('images')->find($id);
            $metaTitle = 'Update Product Images';
            return view('backend.product.editImage', compact('products', 'findImages', 'metaTitle'));
        } 
        
        //*image delete
        public function productImageDelete($id){
            Image::find($id)->delete();
            return back();
        }

        //*image update
        public function productImageUpdate(Request $request, $id)
        {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $imageFile) {
                    $uniName = 'product-' . time() . '-' . uniqid() . '.' . $imageFile->getClientOriginalExtension();

                    $path = $imageFile->storeAs('Product', $uniName, 'public');

                    Image::create([
                        'product_id' => $request->product_id,
                        'image' => $path,
                    ]);
                }
            }
            Swal::success([
                'title' => ' Product Images Updated Successfully!',
            ]);
            return redirect()->route('dashboard.product.image.show');
        }
}