@extends('mainLayout')

@section('content')
<form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
  @csrf
    @method('PUT')
    <h1>Edit {{ $teacher->full_name }} Information</h1>
  <div class="container mt-4 "style="width: 800px;">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="full_name" value="{{ $teacher->full_name }}" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}" required>
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="Male" {{ $teacher->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $teacher->gender == 'Female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="room_number" class="form-label">Room Number</label>
        <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $teacher->roomNumber }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/teachers') }}" class="btn btn-primary">Back to List</a>
    </div>
</form>
@endsection
