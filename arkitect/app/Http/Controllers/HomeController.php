<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Privacy;
use App\Models\Multi_image;
use App\Models\Client;
use App\Models\Practice;

use Illuminate\Support\Facades\Cache;
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
        $prectice = Practice::select('id', 'name', 'image')->get();
        return view('front.Practice.practice',compact('prectice'));
    }
    public function client()
    {
        $client = Client::select('id', 'name', 'title', 'image')->get();
        return view('front.client.client',compact('client'));
    }
    public function attorney()
    {
        $advocate = Privacy::select('id', 'name', 'title', 'image')->where('status',1)->get();
        return view('front.attorney.attorney',compact('advocate'));
    }
    
    public function gallery()
    {
        $gallery = Multi_image::pluck('multi_image', 'id'); // Returns an associative array
        return view('front.gallery.gallery', compact('gallery'));
    }
    public function projects()
    {
        $Property=Property::select('id','image','name')->get();
        return view('front.page.projects',compact('Property'));
    }
    public function terms()
    {
        $team = Privacy::select('id', 'name', 'title', 'image')->where('status',2)->get();
        return view('front.terms.terms',compact('team'));
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
