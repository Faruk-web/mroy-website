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
use App\Models\About;
use App\Models\Board;
use App\Models\Business;
use App\Models\Peace;
use App\Models\Logo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function index()
    {

        $prectice = Practice::select('id', 'name', 'image','title')->orderBy('id', 'desc')->limit(6)->get()->map(function ($item) {
            $item->privacy = Str::limit($item->privacy, 100);
            return $item;
        });
        $blog = Property::select('id', 'name', 'image', 'privacy')->orderBy('id', 'DESC')->get()->map(function ($item) {
            $item->privacy = Str::limit($item->privacy, 70);
            return $item;
        });
        $Slider=Slider::select('id','image','title','s_title','number','client')->get();
        $advocate = Privacy::select('id', 'name', 'title', 'image')->where('status',1)->get();
        $business=Business::find(1);
        $peace=Peace::find(1);
        $logo=Logo::select('id','multi_logo')->get();
        $client=Client::select('id','name','title','privacy')->get();
        $service = Board::select('id', 'name', 'image', 'privacy')->orderBy('id', 'DESC')->get()->map(function ($item) {
            $item->privacy = Str::limit($item->privacy, 100);
            return $item;
        });

        return view('front.home.home',compact('Slider','advocate','prectice','blog','business','peace','logo','client','service'));
    }
    public function service()
    {
        $service = Board::select('id', 'name', 'image', 'privacy')->orderBy('id', 'DESC')->get()->map(function ($item) {
            $item->privacy = Str::limit($item->privacy, 100);
            return $item;
        });
        return view('front.service.service',compact('service'));
    }
    public function servicedeatils($id)
    {
        $team = Board::select('id', 'name', 'image')->orderBy('id', 'asc')->get();
        $teams = Board::select('id', 'name', 'main_image','privacy')->find($id);
        return view('front.service.service_details',compact('team','teams'));
    }
    
    public function blogs()
    {
        $blog = Property::select('id', 'name', 'image', 'privacy')->orderBy('id', 'DESC')->get()->map(function ($item) {
            $item->privacy = Str::limit($item->privacy, 200);
            return $item;
        });
        return view('front.blog.blog',compact('blog'));
    }
    public function blogDetails($id)
    {
        $blog = Property::select('id', 'name', 'image')->orderBy('id', 'asc')->get();
        $blogs = Property::select('id', 'name', 'image','privacy','condition')->find($id);
        return view('front.blog.blog_details',compact('blog','blogs'));
    }
    public function about()
    {
        $about=About::select('id','name','image','sub_details','details','privacy')->find(28);
        return view('front.about.about',compact('about'));
    }
    public function practice()
    {
        $prectice = Practice::select('id', 'name','title','image')->get();
        return view('front.Practice.practice',compact('prectice'));
    }
    public function practicedeatils($id)
    {
        $team = Practice::select('id', 'name','image')->limit(6)->get();
        $teams = Practice::select('id', 'name','title', 'image','privacy')->find($id);
        return view('front.Practice.practice_deatils',compact('team','teams'));
    }
    
    public function client()
    {
        $client = Client::select('id', 'name', 'title', 'image')->get();
        return view('front.client.client',compact('client'));
    }
    public function clientdeatils($id)
    {
        $team = Client::select('id', 'name','image')->limit(6)->get();
        $teams = Client::select('id', 'name','title', 'image','privacy')->find($id);
        return view('front.client.client_detail',compact('team','teams'));
    }
    
    public function attorney()
    {
        $advocate = Privacy::select('id', 'name', 'title', 'image')->where('status',1)->get();
        return view('front.attorney.attorney',compact('advocate'));
    }
    public function attorneydeatil($id)
    {
        $team = Privacy::select('id', 'name','image')->where('status',1)->get();
        $teams = Privacy::select('id', 'name','title', 'image','privacy')->find($id);
        return view('front.attorney.attorney_details',compact('team','teams'));
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
    public function teamdetail($id)
    {
        $team = Privacy::select('id', 'name', 'title', 'image')->where('status',2)->get();
        $teams = Privacy::select('id', 'name','title', 'image','privacy')->find($id);
        return view('front.terms.team_details',compact('team','teams'));
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
