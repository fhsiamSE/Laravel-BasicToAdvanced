<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->primary('id'); // set primary key
            $table->string('name',30);// set name column with max length of 30 characters
            $table->integer('age')->nullable();// set age column as integer and nullable
            $table->string('email')->unique();// set email column unique
            $table->string('address')->default('no city');// set address column with default value of 'no city'
            $table->enum('gender', ['male', 'female'])->nullable(); // set gender column as enum with values of 'male' and 'female' and nullable
            $table->integer('phone')->unsigned(); // set phone column as unsigned integer and nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
