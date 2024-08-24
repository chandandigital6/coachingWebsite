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
        $blogs = Blog::all();
//        $categories = Category::withCount('posts')->get(); // Assuming 'Category' model and 'posts' relationship
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get(); // Fetch the 5 most recent posts

        return view('frontend.blog', compact('blogs', 'recentPosts'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $blogs = Blog::where('title', 'like', "%$query%")
            ->orWhere('short_description', 'like', "%$query%")
            ->get();

//        $categories = Category::withCount('posts')->get();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.blog', compact('blogs', 'recentPosts'));
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

    public function single(Blog $blog)
    {
        $blogs=Blog::all();

        return view('frontend.single',compact('blog','blogs'));
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
