<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class Students extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric",
            "speciality"=>"required|string"
        ]);
        $name=$request->name;
        $age=$request->age;
        $speciality=$request->speciality;
        Student::create([
            'name'=>$name,
            'age'=>$age,
            'speciality'=>$speciality
        ]);
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students/edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric",
            "speciality"=>"required|string"
        ]);
        $name=$request->name;
        $age=$request->age;
        $speciality=$request->speciality;
        $student->update([
            'name'=>$name,
            'age'=>$age,
            'speciality'=>$speciality
        ]);
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
        
    }
    public function display(Student $student)
    {
        $posts=$student->post;
        return view('posts.student-posts',compact('posts'));
    }
}
