<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy('id')->with('instructors')->get();
        $userRole = auth()->user()->role;
        return view('courses', compact('courses', 'userRole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructors = User::where('role', 'Instructor')->get();
        return view('newcourse', ['instructors' => $instructors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'room', 'start_date', 'end_date']);
        $data['instructor_id'] = Auth::user()->id;

        Course::create($data);
        return redirect()->action([CourseController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $activities = Activity::where('course_id', $course->id)->get();

        return view('course_detail', ['course' => $course, 'activities' => $activities]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $instructors = User::where('role', 'Instructor')->get();

        return view('editcourse', ['course' => $course, 'instructors' => $instructors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course['name'] = $request->name;
        $course['description'] = $request->description;
        $course['instructor_id'] = $request->instructor_id;
        $course['room'] = $request->room;
        $course['start_date'] = $request->start_date;
        $course['end_date'] = $request->end_date;
        $course['updated_at'] = Carbon::now();

        $course->update();
        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/courses');
    }
}
