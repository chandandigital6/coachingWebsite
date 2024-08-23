<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $abouts=About::all();
        $services=Service::all();
        $teams =Team::all() ;
        $testimonials=Testimonial::all();
        $blogs=Blog::all();
        return view('frontend.index',compact('banners','abouts','services','teams','testimonials','blogs'));
    }

    public function about()
    {
        $abouts=About::all();
        $testimonials=Testimonial::all();
        return view('frontend.about',compact('testimonials','abouts'));
    }

    public function blog()
    {
        $blogs=Blog::all();
        return view('frontend.blog',compact('blogs'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function course()
    {
        $services=Service::all();
        return view('frontend.course',compact('services'));
    }

    public function single()
    {
        return view('frontend.single');
    }

    public function teacher()
    {
        $teams =Team::all() ;
        return view('frontend.teacher',compact('teams'));
    }

    public function coursesdetails()
    {
        return view('frontend.courses-details');
    }
}
