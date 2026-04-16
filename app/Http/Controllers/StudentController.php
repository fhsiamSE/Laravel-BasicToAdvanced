<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importing the DB facade to interact with the database

class StudentController extends Controller
{
    public function showStudentInfo()
    {
        $students = DB::table('students')
        ->orderBy('name', 'asc')
        ->paginate(5); // Fetching all records from the 'students' table
        return view('studentInfo', ['students' => $students]); // Passing the data to the 'student_info' view
    }
    public function showStudentDetails($id)
    {
        $student = DB::table('students')->where('student_id', $id)->first(); // Fetching a single record from the 'students' table based on the provided ID
        return view('studentDetails', ['student' => $student]); // Passing the data to the 'student_details' view
    }
    public function deleteStudent($id)
    {
        DB::table('students')->where('student_id', $id)->delete(); // Deleting a record from the 'students' table based on the provided ID
        return redirect()->back()->with('success', 'Student deleted successfully!'); // Redirecting back to the previous page
    }
    public function addStudent(Request $req)
    {
        $students = DB::table('students')
        ->insert
        ([
            'student_id' => $req->student_id, // Inserting the student ID from the request
            'name' => $req->name, // Inserting the student name from the request
            'age' => $req->age, // Inserting the student age from the request
            'email' => $req->email, // Inserting the student email from the request
            'address' => $req->address, // Inserting the student address from the request
            'phone' => $req->phone // Inserting the student phone from the request
        ]);
        return redirect()->route('students.info')->with('success', 'Student added successfully!'); // Redirecting to the student information page after adding a new student
    }
    public function showUpdateForm($id)
    {
        $student = DB::table('students')->where('student_id', $id)->first(); // Fetching a single record from the 'students' table based on the provided ID
        return view('updateStudentInfo', ['student' => $student]); // Passing the data to the 'update_student_info' view
    }
    public function updateStudentinfo(Request $req, $id)
    {
        DB::table('students')
            ->where('student_id', $id)
            ->update([
                'name' => $req->name,
                'age' => $req->age,
                'email' => $req->email,
                'address' => $req->address,
                'phone' => $req->phone
            ]);
        return redirect()->route('students.info')->with('success', 'Student updated successfully!');
    }
}
