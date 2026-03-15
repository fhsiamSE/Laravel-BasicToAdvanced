<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// to rename table file, you can use the Artisan command:
// php artisan make:migration rename_users_table
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // to rename table, you can use the Schema::rename method
        Schema::rename('users', 'teachers');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
