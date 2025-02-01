<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::where('status', 1)->first();
     
        return view('admin.privacy.index', compact('privacy'));
    }

    public function create(Request $request){

        // img upload and save and img intervations packge use
        $image = $request->file('image');
        $name_gen_blog = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(700,700)->save('upload/propert/'.$name_gen_blog);
        $save_url_blog = 'upload/propert/'.$name_gen_blog;
            $product_id =   Privacy::insertGetId([
                'name' => $request->name,
                'privacy' => $request->privacy,
                'title' => $request->title,
                'condition' => $request->condition,
                'status' => $request->status,
                'image' => $request->image,
                'image' => $save_url_blog,

            ]);
        Alert::success('Privacy Added Successfully', '');
        return redirect()->back();
     } // end mathod





    // public function create(Request $request)
    // {
    //     $privacy = new Privacy();
    //     $privacy->privacy = $request->privacy;
    //     $privacy->condition = $request->condition;
    //     if ($request->status == 1)
    //     {
    //         $privacy->status = $request->status;
    //     }
    //     else
    //     {
    //         $privacy->status = 2;
    //     }
    //     $privacy->save();
    //     Alert::success('Privacy Added Successfully', '');
    //     return redirect()->back();
    // }

    public function manage()
    {
        $privacy = Privacy::orderBy('id', 'asc')->get();
        return view('admin.privacy.manage', compact('privacy'));
    }

    public function edit($id)
    {
        $privacy = Privacy::find($id);
        return view('admin.privacy.edit', compact('privacy'));
    }

    public function update(Request $request, $id)
    {
        $privacy = Privacy::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen_blog = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(700,700)->save('upload/propert/'.$name_gen_blog);
            $save_url_blog = 'upload/propert/'.$name_gen_blog;
            $privacy->image = $save_url_blog;
        }
        $privacy->privacy = $request->privacy;
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
        Alert::success('Privacy update successfully', '');
        return redirect()->route('privacyy.manage');
    }

    public function delete($id)
    {
        $privacy = Privacy::find($id);
        $privacy->delete();
        Alert::success('Privacy delete Successfully', '');
        return redirect()->back();
    }

    public function page_view()
    {
        $privacy = Privacy::where('status', 1)->first();
        return view('front.privacy.privacy', compact('privacy'));
    }

    public function condition_page_view()
    {
        $privacy = Privacy::where('status', 1)->first();
        return view('front.privacy.conditions', compact('privacy'));
    }
}

