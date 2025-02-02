<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Privacy;
class HomeController extends Controller
{
    public function index()
    {
        $Slider=Slider::select('id','image','title')->get();
        
        return view('front.home.home',compact('Slider'));
    }
    public function service()
    {
        return view('front.service.service');
    }
    public function blogs()
    {
        return view('front.blog.blog');
    }
    public function blogDetails()
    {
        return view('front.blog.blog_details');
    }
    public function about()
    {
        $privacy=Privacy::select('id','name','image','title')->get();
        return view('front.about.about',compact('privacy'));
    }
    public function practice()
    {
        return view('front.Practice.practice');
    }
    public function client()
    {
        return view('front.client.client');
    }
    public function attorney()
    {
        return view('front.attorney.attorney');
    }
    
    public function gallery()
    {
        return view('front.gallery.gallery');
    }
    public function projects()
    {
        $Property=Property::select('id','image','name')->get();
        return view('front.page.projects',compact('Property'));
    }
    public function terms()
    {
        return view('front.terms.terms');
    }
    public function privacy()
    {
        return view('front.page.privacy');
    }
    public function contact()
    {
        return view('front.contact.contact');
    }


}
