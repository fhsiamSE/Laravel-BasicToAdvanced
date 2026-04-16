<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = teacher::orderBy('full_name', 'asc')
        ->paginate(5); // Fetching all records from the 'teachers' table and ordering them by full name in ascending order, then paginating the results
        return view('teacherInfo', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addTeacher'); // Returning the view to show the form for adding a new teacher
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $teacher = new teacher(); // Creating a new instance of the teacher model
        // $teacher->full_name = $request->input('full_name'); // Setting the full name of the teacher from the request input
        // $teacher->email = $request->input('email'); // Setting the email of the teacher from the request input
        // $teacher->gender = $request->input('gender'); // Setting the gender of the teacher from the request input
        // $teacher->roomNumber = $request->input('room_number'); // Setting the room number of the teacher from the request input
        // $teacher->save(); // Saving the new teacher

        // return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');

        teacher::create([
            'full_name' => $request->input('full_name'), // Setting the full name of the teacher from the request input
            'email' => $request->input('email'), // Setting the email of the teacher from the request input
            'gender' => $request->input('gender'), // Setting the gender of the teacher from the request input
            'roomNumber' => $request->input('room_number'), // Setting the room number of the teacher from the request input
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.'); // Redirecting to the index route of teachers with a success message after adding a new teacher

    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
