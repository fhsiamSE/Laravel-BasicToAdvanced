<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Importing the UserController to use it in routes
use App\Http\Controllers\TestWebSiteController; // Importing the invok TestWebSiteController to use it in routes
use App\Http\Controllers\StudentController; // Importing the StudentController to use it in routes

// Route::get('/', function () {
//     return view('welcome');
// });

// //Prexixing routes with 'pages' to group them together
// Route::prefix('pages')->group(function(){
//     Route::get('/about', function () {
//     return view('about');
//     })->name('about'); //Naming the route for easier reference in views and controllers

// Route::get('/contact', function () {
//     return view('contact');
//     })->name('contact');
// });

// //Redirecting old URL to new URL
// Route::redirect('/home', '/');

// //Fallback route to handle undefined routes
// Route::fallback(function () {
//     return "<h1>404 Not Found</h1>" . "<p>The page you are looking for does not exist.</p>";
// });

// // Example route to list users
// Route::get('/users', [UserController::class, 'index'])->name('users.index');

// // Example route to show user details with dynamic parameter {id}
// Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

// // Using the invokable controller to handle the /test route
// Route::get('/test', TestWebSiteController::class);

 Route::get('/students', [StudentController::class, 'showStudentInfo'])->name('students.info'); // Route to show student information using the student controller
 Route::get('/student/{id}', [StudentController::class, 'showStudentDetails'])->name('student.details'); // Route to show student details using the student controller
 Route::get('/delete/{id}', [StudentController::class, 'deleteStudent'])->name('student.delete'); // Route to delete a student using the student controller
 Route::post('/add_student', [StudentController::class, 'addStudent'])->name('addStudent'); // Route to add a new student using the student controller
 Route::post('/update/{id}', [StudentController::class, 'updateStudentinfo'])->name('updateStudentinfo'); // Route to update student information using the student controller
 Route::get('/update_student/{id}', [StudentController::class, 'showUpdateForm'])->name('updateStudent'); // Route to update student information using the student controller
 Route::view('add_newstudent', '/addStudent');// Route to show the form for adding a new student using a view
