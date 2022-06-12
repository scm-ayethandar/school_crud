<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index1() {

        $students = Student::get();

        return view('students.student', [
            'students' =>$students
        ]);
    } 

    public function index2() {
        return view('students.create');
    } 

    public function store(StudentRequest $request) {
        
        Student::create([
            'name'=> $request->name,
            'age'=> $request->age,
        ]);

        return redirect()->route('student');
        
    }

    public function edit(Student $student) {

        return view('students.edit', [
            'student' =>$student
        ]);
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->name = request('name');
        $student->age = request('age');
        $student->save();

        // return "Updated post";
        return redirect()->route('student');
    }

    public function destroy(Student $student) {

        $student->delete();

        return back();
    }
}