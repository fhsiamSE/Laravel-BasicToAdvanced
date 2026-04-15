<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1>Student Information</h1>

<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>{{ $student->student_id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->age }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->address }}</td>
    <td>{{ $student->phone }}</td>
  </tr>
  </tbody>
</table>