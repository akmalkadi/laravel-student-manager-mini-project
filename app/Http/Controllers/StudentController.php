<?php

namespace App\Http\Controllers;

// Import the Student model so we can interact with the students table
use App\Models\Student;

// Import Request so we can read form data
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display all students from the database.
     * This method is triggered when you visit:  GET /students
     */
    public function index()
    {
        // Fetch all records from the students table using Eloquent ORM
        $students = Student::all();

        // Pass the data to the Blade view (resources/views/students/index.blade.php)
        return view('students.index', compact('students'));
    }

    /**
     * Show the form to add a new student.
     * Triggered when visiting:  GET /students/create
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in the database.
     * Triggered when the create form is submitted: POST /students
     */
    public function store(Request $r)
    {
        // Validate user input before saving
        // Laravel automatically redirects back with errors if validation fails
        $r->validate([
            'name'  => 'required',        // Name must not be empty
            'grade' => 'required|numeric' // Grade must be a number
        ]);

        // Create a new student using only the allowed fields
        // (fillable fields are defined in the Student model)
        Student::create($r->only(['name', 'grade']));

        // Redirect back to the list of students after saving
        return redirect()->route('students.index');
    }

    /**
     * Show the form to edit an existing student.
     * Triggered when visiting: GET /students/{id}/edit
     */
    public function edit($id)
    {
        // Find the student or show a 404 error if not found
        $student = Student::findOrFail($id);

        // Load the edit form with the student's current data
        return view('students.edit', compact('student'));
    }

    /**
     * Update an existing student record.
     * Triggered when submitting the edit form: PUT /students/{id}
     */
    public function update(Request $r, $id)
    {
        // Validate input again during update
        $r->validate([
            'name'  => 'required',
            'grade' => 'required|numeric'
        ]);

        // Find the student
        $student = Student::findOrFail($id);

        // Update with only the allowed fields
        $student->update($r->only(['name', 'grade']));

        // Redirect back to student list
        return redirect()->route('students.index');
    }

    /**
     * Delete a student from the database.
     * Triggered when submitting: DELETE /students/{id}
     */
    public function destroy($id)
    {
        // Find the student and delete it
        Student::findOrFail($id)->delete();

        // Redirect back to the list
        return redirect()->route('students.index');
    }
}
