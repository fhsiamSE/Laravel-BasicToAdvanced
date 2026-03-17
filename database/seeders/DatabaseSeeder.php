<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //to insert seed data into users table using db
        // $this->call([
        //     StudentSeeder::class,
        // ]);

        //to insert factory data into users table using db
        teacher::factory()->count(5)->create(); 
    }
}
