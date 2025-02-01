<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Multi_image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
class PropertyController extends Controller
{
    public function index()
    {
        $privacy = Property::where('status', 1)->first();
        return view('admin.property.index', compact('privacy'));
    }

    public function create(Request $request){

        // img upload and save and img intervations packge use
        $image = $request->file('image');
        $name_gen_blog = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(700,700)->save('upload/propert/'.$name_gen_blog);
        $save_url_blog = 'upload/propert/'.$name_gen_blog;
            $product_id =   Property::insertGetId([
                'name' => $request->name,
                'privacy' => $request->privacy,
                'condition' => $request->condition,
                'image' => $request->image,
                'image' => $save_url_blog,

            ]);
            // Multiple img upload start
        // $images = $request->file('multi_image');
        // foreach ($images as $img){
        //     $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        //     Image::make($img)->resize(700,700)->save('upload/multi_image/'.$make_name);
        //     $uploadPath = 'upload/multi_image/'.$make_name;
        //     Multi_image::insert([
        //         'property_id' => $product_id,
        //         'multi_image' => $uploadPath,

        //     ]);
        // }
         // end loop
        Alert::success('Property Added Successfully', '');
        return redirect()->back();
     } // end mathod
    public function manage()
    {
        $privacy = Property::orderBy('id', 'asc')->get();
        return view('admin.property.manage', compact('privacy'));
    }

    public function edit($id)
    {
        $privacy = Property::find($id);
        return view('admin.property.edit', compact('privacy'));
    }

    public function update(Request $request, $id)
    {

        $privacy = Property::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen_blog = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(700,700)->save('upload/propert/'.$name_gen_blog);
            $save_url_blog = 'upload/propert/'.$name_gen_blog;
            $privacy->image = $save_url_blog;
        }
        $privacy->privacy = $request->privacy;
        $privacy->name = $request->name;
        $privacy->condition = $request->condition;
        if ($request->status == 1)
        {
            $privacy->status = $request->status;
        }
        else
        {
            $privacy->status = 2;
        }
        $privacy->save();
        Alert::success('property update successfully', '');
        return redirect()->route('propertyy.manage');
    }

    public function delete($id)
    {
        $privacy = Property::find($id);
        $privacy->delete();
        Alert::success('property delete Successfully', '');
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
