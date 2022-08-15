<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => [
                'required',
                'max:255',
            ],
            'student_id' => [
                'required',
                'max:255',
            ],
            'phone' => [
                'required',
                'max:255',
            ],
        ]);

        Student::create($request->all());

        return redirect()->route('student.index');
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        return view('student.form', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $this->validate($request, [
            'name' => [
                'required',
                'max:255',
            ],
            'student_id' => [
                'required',
                'max:255',
            ],
            'phone' => [
                'required',
                'max:255',
            ],
        ]);

        $student->update($request->all());

        return redirect()->route('student.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return back();
    }
}
