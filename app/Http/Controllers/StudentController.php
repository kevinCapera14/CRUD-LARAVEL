<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index', ['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create', ['courses' => Course::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'required|date',
            'course' => 'required',
        ]);
        $student = new Student();
        $student -> name = $request -> input('name');
        $student -> birth_date = $request -> input('birth_date');
        $student -> course_id = $request -> input('course');
        $student->save();

        return view("students.message", ['msg' =>"Saved Register"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', ['student' => $student, 'courses' => Course::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'birth_date' => 'required|date',
            'course' => 'required',
        ]);
        $student = Student::find($id);
        $student -> name = $request -> input('name');
        $student -> birth_date = $request -> input('birth_date');
        $student -> course_id = $request -> input('course');
        $student->save();

        return view("students.message", ['msg' =>"Updated Register"]);
    }

        


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect("students");
    }
}
