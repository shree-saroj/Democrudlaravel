<h2>{{ isset($student) ? 'Edit' : 'Add' }} Student</h2>
<form
    method="POST"
    action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}">
    @csrf
    @if(isset($student))
    @method('PUT')
    @endif
    <input type="text" name="name" placeholder="Name" value="{{ $student->name ?? '' }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ $student->email ?? '' }}"><br>
    <input type="text" name="course" placeholder="Course" value="{{ $student->course ?? '' }}"><br>
    <button type="submit">Submit</button>
</form>