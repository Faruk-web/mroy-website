<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'parent_id' => 'required',
        ]);
        $category = new Category();
        $category->parent_id = $request->parent_id;
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->description = $request->description;
        if ($request->status == 1)
        {
            $category->status = $request->status;
        }
        else
        {
            $category->status = 2;
        }
        $category->save();
        Alert::success('Category Added Successfully', '');
        return redirect()->back();
    }

    public function manage()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        return view('admin.category.manage', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::where('parent_id', 0)->get();
        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->parent_id = $request->parent_id;
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->description = $request->description;
        if ($request->status == 1)
        {
            $category->status = $request->status;
        }
        else
        {
            $category->status = '2';
        }
        $category->save();
        Alert::success('Category update successfully', '');
        return redirect()->route('category.manage');
    }

    public function delete($id)
    {
        // Find category
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found');
        }
    
        // Delete subcategories
        $subCategories = Category::where('parent_id', $category->id)->get();
        foreach ($subCategories as $subCategory) {
            $subCategory->delete();
        }
    
        // Delete associated news (if any)
        if (!empty($category->news)) { // Check if the relationship exists
            foreach ($category->news as $data) {
                if (!empty($data->image) && file_exists(public_path($data->image))) {
                    unlink(public_path($data->image));
                }
                $data->delete();
            }
        }
    
        // Delete the category itself
        $category->delete();
    
        Alert::success('Category deleted successfully', '');
        return redirect()->back();
    }
    
    
}
