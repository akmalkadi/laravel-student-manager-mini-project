<h2>All Students</h2>

<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Actions</th>
    </tr>

    @foreach($students as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->grade }}</td>
            <td>
                <a href="{{ url('/students/'.$s->id.'/edit') }}">Edit</a>

                <form method="POST" action="{{ url('/students/'.$s->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>

<a href="{{ url('/students/create') }}">Add New Student</a>
