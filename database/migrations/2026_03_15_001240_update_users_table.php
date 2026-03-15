<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// to update table file, you can use the Artisan command:
// php artisan make:migration update_users_table --table=users
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
                $table->integer('phone')->nullable()->after('email');
                $table->date('birthdate')->nullable()->after('phone');
                $table->string('address')->nullable()->after('birthdate');
                $table->string('gender')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
