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
    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-primary">Details</a>
    <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">Update</a>
    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
    </td>
  </tr>
  </tbody>
  @endforeach
</table>
<div class="mt-4 w-75 mx-auto justify-content-center">
  {{ $teachers->links() }}
</div>
@endsection

