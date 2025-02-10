<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
      public function index()
      {
          return view('admin.setting.index');
      }
  
      public function create(Request $request)
  {
      $request->validate([
          'name' => 'required',
      ]);
  
      $privacy = new Setting();
  
      // Handle image upload
      if ($request->hasFile('logo')) {
          $image = $request->file('logo');
          $name_gen_blog = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
          $save_url_blog = 'upload/setting/' . $name_gen_blog;
  
          Image::make($image)->resize(394, 341)->save(public_path($save_url_blog));
          $privacy->logo = $save_url_blog;
      }
       // Handle image upload
       if ($request->hasFile('f_logo')) {
        $image = $request->file('f_logo');
        $name_gen_blog = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $save_url_blog = 'upload/setting/' . $name_gen_blog;

        Image::make($image)->resize(394, 341)->save(public_path($save_url_blog));
        $privacy->f_logo = $save_url_blog;
    }
  
      // Assign other fields
      $privacy->name = $request->name;
      $privacy->p_phone = $request->p_phone;
      $privacy->s_phone = $request->s_phone;
      $privacy->d_phone = $request->d_phone;
      $privacy->p_mail = $request->p_mail;
      $privacy->s_mail = $request->s_mail;
      $privacy->location = $request->location;
      $privacy->privacy = $request->privacy;
 
      $privacy->save();
  
      Alert::success('Setting Added Successfully', '');
      return redirect()->back();
  }
  
    public function manage()
      {
          $privacy = Setting::orderBy('id', 'asc')->get();
          return view('admin.setting.manage', compact('privacy'));
      }
  
      public function edit($id)
      {
          $privacy = Setting::find($id);
          return view('admin.setting.edit', compact('privacy'));
      }
  
      public function update(Request $request, $id)
      {
          $privacy = Setting::find($id);
      
          if (!$privacy) {
              Alert::error('Practice not found', '');
              return redirect()->route('practice.manage');
          }
          if ($request->hasFile('logo')) {
              if (!empty($privacy->image) && file_exists(public_path($privacy->logo))) {
                  try {
                      unlink(public_path($privacy->logo));
                  } catch (\Exception $e) {
                      \Log::error("Failed to delete logo: " . $e->getMessage());
                  }
              }
              // Upload new image
              $image = $request->file('logo');
              $name_gen_blog = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
              $save_url_blog = 'upload/setting/' . $name_gen_blog;
      
              Image::make($image)->resize(200, 60)->save(public_path($save_url_blog));
              $privacy->logo = $save_url_blog;
          }

          if ($request->hasFile('f_logo')) {
            if (!empty($privacy->image) && file_exists(public_path($privacy->f_logo))) {
                try {
                    unlink(public_path($privacy->f_logo));
                } catch (\Exception $e) {
                    \Log::error("Failed to delete footer logo: " . $e->getMessage());
                }
            }
            // Upload new image
            $image = $request->file('f_logo');
            $name_gen_blog = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $save_url_blog = 'upload/setting/' . $name_gen_blog;
    
            Image::make($image)->resize(80, 90)->save(public_path($save_url_blog));
            $privacy->f_logo = $save_url_blog;
        }
          // Update other fields
            $privacy->name = $request->name;
            $privacy->p_phone = $request->p_phone;
            $privacy->s_phone = $request->s_phone;
            $privacy->d_phone = $request->d_phone;
            $privacy->p_mail = $request->p_mail;
            $privacy->s_mail = $request->s_mail;
            $privacy->location = $request->location;
            $privacy->privacy = $request->privacy;
      
          $privacy->save();
      
          Alert::success('Setting updated successfully', '');
          return redirect()->route('setting.manage');
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
