{{-- Page title --}}
<h3>Edit Student</h3>

{{--
    The form will send a PUT request to: /students/{id}
    PUT is not allowed directly in HTML, so Laravel uses method spoofing.
--}}
<form method="POST" action="{{ url('/students/'.$student->id) }}">

    {{-- CSRF token: required for all POST/PUT/DELETE forms --}}
    @csrf

    {{--
        Because HTML forms do NOT support PUT or DELETE,
        Laravel uses @method('PUT') to tell the server:
        "This POST request should be treated as a PUT request."
    --}}
    @method('PUT')

    {{-- Input field for name, pre-filled with existing data --}}
    <label>Name:</label><br>
    <input name="name" value="{{ $student->name }}"><br><br>

    {{-- Input field for grade, pre-filled with existing grade --}}
    <label>Grade:</label><br>
    <input name="grade" type="number" value="{{ $student->grade }}"><br><br>

    {{-- Submit button to update the student --}}
    <button>Update</button>
</form>

<br>

{{-- Back link to the list of students --}}
<a href="{{ route('students.index') }}">Back</a>
