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

        //there are more methods to fetch data from the database, such as:
        // $teachers = teacher::all(); // Fetching all records from the 'teachers'
        // $teachers = teacher::chunk(2); // Fetching records in chunks of 2 from the 'teachers' table, which is useful for processing large datasets without consuming too much memory
        // $teachers = teacher::lazy(); // Fetching records lazily from the 'teachers' table, which is useful for processing large datasets without consuming too much memory, similar to chunking but with a more flexible approach
        // $teachers = teacher::cursor(); // Fetching records using a cursor from the 'teachers' table, which is useful for processing large datasets without consuming too much memory, similar to lazy loading but with a more efficient approach for iterating through records one at a time
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

        //mass update method
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
        $teacher = teacher::find($teacher->id); // Finding a specific teacher by its ID
        return view('teacherDetails', compact('teacher')); // Returning the view to show the details of a specific teacher, passing the teacher data to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        return view('editTeacherInfo', ['teacher' => $teacher]); // Returning the view to show the form for editing a specific teacher, passing the teacher data to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
       // return $request; // Returning the request data for debugging purposes, to see what data is being sent in the update request

       
        // $teacher = teacher::find($teacher->id); // Finding a specific teacher by its ID
         
        // $teacher->full_name = $request->full_name; // Setting the full name of the teacher from the request input
        // $teacher->email = $request->email; // Setting the email of the teacher from the request input
        // $teacher->gender = $request->gender; // Setting the gender of the teacher from the request input
        // $teacher->roomNumber = $request->room_number; // Setting the room number of the teacher from the request input

        // $teacher->save(); // Saving the new teacher

        //mass update method
        $teacher = teacher::where('id', $teacher->id)
        ->update([
            'full_name' => $request->full_name, // Setting the full name of the teacher from the request input
            'email' => $request->email, // Setting the email of the teacher from the request input
            'gender' => $request->gender, // Setting the gender of the teacher from the request input
            'roomNumber' => $request->room_number, // Setting the room number of the teacher from the request input
        ]);


        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        $teacher = teacher::find($teacher->id); // Finding a specific teacher by its ID
        $teacher->delete(); // Deleting the specific teacher

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.'); // Redirecting to the index route of teachers with a success message after deleting a teacher
    }
}
