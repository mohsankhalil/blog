<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){

        return view("student_form");
    }
    public function store(Request $request){

          $student = new Student;

          $student->name = $request->name;
          $student->father_name = $request->father_name;
          $student->email = $request->email;
          $student->phone = $request->phone;
          $student->class = $request->class;
          $student->message = $request->message;

          $student->save();
          return redirect()->route('student');


    }
    public function show(Request $request){
        $student = Student::all();

        return view("student_form",compact('student'));

    }




     public function edit($id){
        $student = Student::find($id);

        return view('edit',compact('student'));


     }


     public function update(Request $request, $id){

        $student = Student::find($id);

        $student->name = $request->name;
          $student->father_name = $request->father_name;
          $student->email = $request->email;
          $student->phone = $request->phone;
          $student->class = $request->class;
          $student->message = $request->message;

          $student->save();
          return redirect()->route('student');

     }

    public function destroy($id){

        $student = Student::find($id);

        $student->delete();

         return redirect()->route('student');


    }
}
