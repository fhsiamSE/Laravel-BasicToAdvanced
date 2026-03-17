<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File; // to use file facade for reading json file data
//to create seeder for students table using model factory
// php artisan make:seeder StudentSeeder
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //to insert single data into students table using model factory
        // Student::create([
        //     'name' => 'Siam',
        //     'age' => 25,
        //     'email' => 'siam@example.com',
        //     'address' => 'Dhaka',
        //     'gender' => 'male',
        //     'phone' => 1234567890
        // ]);


        //to insert multiple data into students table using model factory
    //    $student = collect([
    //      [
    //         'name' => 'Siam',
    //         'age' => 25,
    //         'email' => 'siam@example.com',
    //         'address' => 'Dhaka',
    //         'gender' => 'male',
    //         'phone' => 1234567890
    //         ],
    //         [
    //         'name' => 'Shamim',
    //         'age' => 30,
    //         'email' => 'shamim@example.com',
    //         'address' => 'Dhaka',
    //         'gender' => 'male',
    //         'phone' => 123456774
    //         ],
            
    //         [
    //         'name' => 'Sadia',
    //         'age' => 22,
    //         'email' => 'sadia@example.com',
    //         'address' => 'Dhaka',
    //         'gender' => 'female',
    //         'phone' => 1234567890
    //         ]
    //    ]);
    //      $student->each(function($student){
    //       Student::create($student);
    //      });


    //to insert multiple data into students using json file data
        $json = File::get("database/json/students.json");
        $students = collect(json_decode($json));
        $students->each(function($student){
            Student::create([
                'name' => $student->name,
                'age' => $student->age,
                'email' => $student->email,
                'address' => $student->address,
                'gender' => $student->gender,
                'phone' => $student->phone
            ]);
        });
        
    }
}
