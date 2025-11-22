<h3>Edit Student</h3>

<form method="POST" action="{{ url('/students/'.$student->id) }}">
    @csrf
    @method('PUT')

    <label>Name:</label><br>
    <input name="name" value="{{ $student->name }}"><br><br>

    <label>Grade:</label><br>
    <input name="grade" type="number" value="{{ $student->grade }}"><br><br>

    <button>Update</button>
</form>

<br>
<a href="{{ route('students.index') }}">Back</a>
