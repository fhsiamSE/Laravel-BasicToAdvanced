<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Student Information</h1>

<a href="/add_newstudent" class="btn btn-success mb-3">Add New Student</a>
<table class="table table-hover table-bordered table-striped table-responsive w-75 mt-4 mx-auto mb-5 align-middle text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>

    </tr>
  </thead>
  @foreach ($students as $student)
  <tbody>
  <tr>
    <td>{{ $student->student_id }}</td>
    <td>{{ $student->name }}</td>

    <td class="d-flex mx-auto gap-4 justify-content-center">
    <a href="{{ route('student.details', $student->student_id) }}" class="btn btn-primary">Details</a>
    <a href="/update_student/{{ $student->student_id }}" class="btn btn-warning">Update</a>
    <a href="{{ route('student.delete', $student->student_id) }}" class="btn btn-danger">Delete</a>
    </td>
  </tr>
  </tbody>
  @endforeach
</table>
<div class="mt-4 w-75 mx-auto justify-content-center">
  {{ $students->links() }}
</div>