<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $course = Course::query();

        if (!empty($keyword)) {
            $course->where('title', 'like', "%$keyword%");
        }
        $courseData = $course->paginate(5);

        return view('course.index',compact('courseData'));
    }

    public function create(){
        return view('course.create');
    }

    public function store(CourseRequest $request){
//        dd($request);
        $course=Course::create($request->all());
        $image = $request->file('image')->store('public/course');

        $course->image = str_replace('public/', '', $image);
        $course->save();
        return redirect()->route('course.index')->with('success', 'Course  created successfully.');
    }

    public function edit(Course $course){

        return view('course.edit',compact('course'));
    }

    public function update(Course $course , CourseRequest $request){
        $courseData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/course');
            $courseData['image'] = str_replace('public/', '', $imagePath);
        }

        $course->update($courseData);

        return redirect()->route('course.index')->with('success', 'course item successfully updated');
    }


    public function delete(Course $course){
        $course->delete();
        return redirect()->route('course.index')->with('error','Successfully  course items deleted');

    }
    public function duplicate(Course $course){
        $productDuplicate=$course->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
