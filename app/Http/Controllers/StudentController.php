<?php

namespace App\Http\Controllers;

use App\student;
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
        $students = student::all();
        return view('studentform',compact('students'));
    }
    public function about()
    {   
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        return view('studentdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);

        $students = new Student();

        $students->name = $request->input('name');
        $students->course = $request->input('course');
        $students->address = $request->input('address');
        $students->mobile = $request->input('mobile');
        $students->save();

        return redirect('/students')->with('Success','Student Data Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('studentedit',compact('students',$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);

    $students = Student::find($id);
    $students->name = $request->input('name');
    $students->course = $request->input('course');
    $students->address = $request->input('address');
    $students->mobile = $request->input('mobile');
    $students->save();
    return redirect('students');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $students = Student::find($id);
       $students->delete();
       return redirect('students');
    }
}
