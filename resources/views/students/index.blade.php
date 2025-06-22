<h1>Student List</h1>
<a href="{{ route('students.create') }}">Add Student</a>

<table border="1">
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>
            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>