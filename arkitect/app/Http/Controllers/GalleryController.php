<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multi_image;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
class GalleryController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.gallery.index');
    }

    public function create(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'multi_image' => 'required|array',
            'multi_image.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048', 
        ]);

        $uploadPath = public_path('upload/multi_image/');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0775, true);
        }
        if ($request->hasFile('multi_image')) {
            foreach ($request->file('multi_image') as $image) {
                $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $savePath = 'upload/gallery/' . $imageName;
                Image::make($image)->resize(618, 355)->save(public_path($savePath));
                Multi_image::create([
                    'name' => $request->name,
                    'multi_image' => $savePath,
                ]);
            }
        }
        Alert::success('success', 'Gallery images uploaded successfully!');
        return redirect()->back();
    }
    
    public function manage()
    {
        $privacy = Multi_image::orderBy('id', 'asc')->get();
        return view('admin.gallery.manage', compact('privacy'));
    }

    public function edit($id)
    {
        $privacy = Multi_image::find($id);
        return view('admin.gallery.edit', compact('privacy'));
    }
   
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'multi_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        // Find the image record
        $privacy = Multi_image::find($id);
        
        if (!$privacy) {
            return redirect()->route('gallery.manage')->with('error', 'Image not found');
        }
    
        if ($request->hasFile('multi_image')) {
            // Get the image from the request
            $image = $request->file('multi_image');
    
            // Generate a unique name for the new image
            $name_gen_blog = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    
            // Resize and save the image
            $save_path = 'upload/gallery/' . $name_gen_blog;
            Image::make($image)->resize(618, 355)->save(public_path($save_path));
    
            // Optional: Delete old image if exists
            if (!empty($privacy->multi_image) && file_exists(public_path($privacy->multi_image))) {
                unlink(public_path($privacy->multi_image));
            }
    
            // Update the image path in the database
            $privacy->multi_image = $save_path;
        }
    
        // Update the name field
        $privacy->name = $request->name;
        $privacy->save();
    
        Alert::success('Gallery updated successfully', '');
        return redirect()->route('gallery.manage');
    }
    


    public function delete($id)
    {
        $privacy = Multi_image::find($id);
    
        if (!$privacy) {
            Alert::error('Gallery not found', '');
            return redirect()->back();
        }
    
        // Delete image from storage
        if (file_exists(public_path($privacy->multi_image))) {
            unlink(public_path($privacy->multi_image));
        }
    
        // Delete record from database
        $privacy->delete();
    
        Alert::success('Blog deleted successfully', '');
        return redirect()->back();
    }
    public function page_view()
    {
        $privacy = Property::first();
        return view('front.property.privacy', compact('privacy'));
    }

    public function condition_page_view()
    {
        $privacy = Property::first();
        return view('front.property.conditions', compact('privacy'));
    }
}
