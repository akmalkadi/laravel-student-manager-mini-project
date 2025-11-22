<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $r)
    {
        $r->validate([
            'name'  => 'required',
            'grade' => 'required|numeric'
        ]);

        Student::create($r->only(['name', 'grade']));

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $r, $id)
    {
        $r->validate([
            'name'  => 'required',
            'grade' => 'required|numeric'
        ]);

        $student = Student::findOrFail($id);
        $student->update($r->only(['name', 'grade']));

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('students.index');
    }
}
