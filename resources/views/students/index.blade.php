{{-- Page title --}}
<h2>All Students</h2>

{{--
    Simple HTML table to display all students.
    $students is passed from the controller:
    return view('students.index', compact('students'));
--}}
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        {{-- Table headers --}}
        <th>ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Actions</th>
    </tr>

    {{--
        Loop through all students using Blade's @foreach directive.
        Each $s is one student record from the database.
    --}}
    @foreach($students as $s)
        <tr>
            {{-- Display student ID, name, and grade --}}
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->grade }}</td>

            <td>
                {{-- Edit link: goes to /students/{id}/edit --}}
                <a href="{{ url('/students/'.$s->id.'/edit') }}">Edit</a>

                {{--
                    Delete form.
                    HTML forms do NOT support DELETE method,
                    so Laravel uses @method('DELETE') to spoof it.
                --}}
                <form method="POST" action="{{ url('/students/'.$s->id) }}" style="display:inline;">

                    {{-- CSRF token for security --}}
                    @csrf

                    {{-- Spoof DELETE request --}}
                    @method('DELETE')

                    {{-- Confirmation alert before deleting --}}
                    <button onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>

{{-- Link to the "Add Student" form --}}
<a href="{{ url('/students/create') }}">Add New Student</a>
