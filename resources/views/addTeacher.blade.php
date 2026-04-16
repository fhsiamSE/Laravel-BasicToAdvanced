@extends('mainLayout')

@section('content')
<h2 class="text-center mb-4">Add New Teacher</h2>

<div class="w-50 mx-auto">
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
            <div class="mb-3">
                droupdown
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

             <div class="mb-3">
                <label class="form-label">Room Number</label>
                <input type="text" name="room_number" class="form-control" required>
            </div>

        <div class="text-center">
            <button class="btn btn-success">Save</button>
            <a href="{{ url('/teachers') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

@endsection