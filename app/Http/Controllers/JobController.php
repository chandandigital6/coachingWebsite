<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $Job = Job::query();

        if (!empty($keyword)) {
            $Job->where('title', 'like', "%$keyword%");
        }
        $jobData = $Job->paginate(5);

        return view('job.index',compact('jobData'));
    }

    public function create(){
        return view('job.create');
    }

    public function store(JobRequest $request){
//        dd($request);

        $Job=Job::create($request->all());
        $image = $request->file('image')->store('public/Job');

        $Job->image = str_replace('public/', '', $image);
        $Job->save();
        return redirect()->route('job.index')->with('success', 'Job  created successfully.');
    }

    public function edit(Job $job){

        return view('job.edit',compact('job'));
    }

    public function update(Job $job , JobRequest $request){
        $JobData = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/job');
            $JobData['image'] = str_replace('public/', '', $imagePath);
        }

        $job->update($JobData);

        return redirect()->route('job.index')->with('success', 'Job item successfully updated');
    }


    public function delete(Job $job){
        $job->delete();
        return redirect()->route('job.index')->with('error','Successfully  Job items deleted');

    }
    public function duplicate(Job $job){
        $productDuplicate=$job->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
 
}
