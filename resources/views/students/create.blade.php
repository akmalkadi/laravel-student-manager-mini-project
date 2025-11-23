{{-- Page title --}}
<h3>Add Student</h3>

{{--
    The form sends a POST request to the "students.store" route.
    This route is created automatically by Route::resource().
--}}
<form method="POST" action="{{ route('students.store') }}">

    {{-- CSRF protection: required for all POST forms in Laravel --}}
    @csrf

    {{-- Input field for student name --}}
    <label>Name:</label><br>
    <input name="name"><br><br>

    {{-- Input field for student grade --}}
    <label>Grade:</label><br>
    <input name="grade" type="number"><br><br>

    {{-- Button to submit the form --}}
    <button>Save</button>
</form>

<br>

{{-- Link to go back to the list of students --}}
<a href="{{ route('students.index') }}">Back</a>
