<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);

        return view('students.home',compact('students'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.addstudent');
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

            'Name' =>'required',
            'Roll' =>'required',
            'Registration' =>'required',
            'Course' =>'required',
            'Fee' =>'required',

        ]);
     
        Student::create($request->all());
        session()->flash('message','student added successfully');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, $id)
    {
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student ,$id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student ,$id)
    {
        $request->validate([

        ]);

        $student = Student::find($id);
        // $student->update($request->all());
        $student->Name = $request->Name;
        $student->Roll = $request->Roll;
        $student->Registration = $request->Registration;
        $student->Course = $request->Course;
        $student->Fee = $request->Fee;
        $student->save();

        session()->flash('message','student updated successfully');

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student ,$id)
    {
        Student::destroy($id);
        session()->flash('message','student deleted successfully');
        return redirect()->to('/');
    }
}
