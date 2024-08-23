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
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function course()
    {
        return view('frontend.course');
    }

    public function single()
    {
        return view('frontend.single');
    }

    public function teacher()
    {
        return view('frontend.teacher');
    }

    public function coursesdetails()
    {
        return view('frontend.courses-details');
    }
}
