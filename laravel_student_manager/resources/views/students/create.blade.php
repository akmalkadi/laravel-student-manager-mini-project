<h3>Add Student</h3>

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <label>Name:</label><br>
    <input name="name"><br><br>

    <label>Grade:</label><br>
    <input name="grade" type="number"><br><br>

    <button>Save</button>
</form>

<br>
<a href="{{ route('students.index') }}">Back</a>
