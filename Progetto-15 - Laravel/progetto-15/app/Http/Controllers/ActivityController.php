<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::pluck('name', 'id');
        return view('newactivity', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'time', 'day', 'status', 'difficulty', 'goal', 'course_id']);

        Activity::create($data);
        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id); 
        $courseId = $activity->course_id; 
        $courses = Course::all(); 
        return view('editactivity', ['activity' => $activity, 'courseId' => $courseId, 'courses' => $courses]);
    }   



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);
        $courseId = $activity->course_id;

        $activity['name'] = $request->name;
        $activity['description'] = $request->description;
        $activity['goal'] = $request->goal;
        $activity['time'] = $request->time;
        $activity['day'] = $request->day;
        $activity['status'] = $request->status;
        $activity['difficulty'] = $request->difficulty;
        $activity['course_id'] = $request->course_id;
        $activity['updated_at'] = Carbon::now();

        $activity->update();
        return redirect('/courses/'.$courseId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id); 
        $courseId = $activity->course_id; 
        $activity->delete(); 
        return redirect('/courses/'.$courseId); 
    }
}
