<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// This controller can be used to handle user-related actions such as registration, login, profile management, etc.
//To create a new controller, you can use the Artisan command:
//php artisan make:controller UserController

class UserController extends Controller
{
    // Method to display a list of users
    public function index()
    {
        // For demonstration, we will return a simple view with a message.
        // In a real application, you would typically fetch users from the database and pass them to the view.
        return view('userInfo'); // Assuming you have a view named 'user.info' to display user information
    }

    // Method to show details of a specific user based on their ID
    public function show($id)
    {
        // For demonstration, we will return a simple view with the user ID.
        // In a real application, you would fetch the user details from the database using the provided ID.
        return view('showUserID', ['id' => $id]); // Assuming you have a view named 'showUserID' to display the user ID
    }
}
