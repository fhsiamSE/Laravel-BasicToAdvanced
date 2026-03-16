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
        Schema::create('libarys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable(); // set student_id column as unsigned big integer and nullable
            $table->foreign('student_id') // set student_id column as foreign key
            ->references('student_id') // reference student_id column 
            ->on('students') //reference students table
            //cascadeOnUpdate, cascadeOnDelete, restrictOnDelete, restrictOnUpdate, setNullOnDelete, noActionOnDelete, setNullOnUpdate, noActionOnUpdate
            ->onUpdate('cascade') // set on update cascade
            ->onDelete('set null'); // set on delete set null
            $table->string('book_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libarys');
    }
};
