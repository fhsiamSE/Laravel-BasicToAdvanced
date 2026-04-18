@extends('mainLayout')

@section('content')
<h1 class="text-center mb-4">Teacher Details</h1>
  <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Room No.</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>{{ $teacher->full_name }}</td>
    <td>{{ $teacher->email }}</td>
    <td>{{ $teacher->gender }}</td>
    <td>{{ $teacher->roomNumber }}</td>

  </tr>
  </tbody>
</table>
<a href="{{ url('/teachers') }}" class="btn btn-primary mb-3">Back to List</a>
@endsection