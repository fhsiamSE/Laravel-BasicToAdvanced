@extends('mainLayout')


@section('content')
<h1>Teacher Information</h1>
<a href="{{ route('teachers.create') }}" class="btn btn-success mb-3">Add New Teacher</a>
<table class="table table-hover table-bordered table-striped table-responsive w-75 mt-4 mx-auto mb-5 align-middle text-center">
  <thead>
    <tr>
      <th scope="col">Name</th>

    </tr>
  </thead>
  @foreach ($teachers as $teacher)
  <tbody>
  <tr>
    <td>{{ $teacher->full_name }}</td>

    <td class="d-flex mx-auto gap-4 justify-content-center">
    <a href="" class="btn btn-primary">Details</a>
    <a href="" class="btn btn-warning">Update</a>
    <a href="" class="btn btn-danger">Delete</a>
    </td>
  </tr>
  </tbody>
  @endforeach
</table>
<div class="mt-4 w-75 mx-auto justify-content-center">
  {{ $teachers->links() }}
</div>
@endsection

