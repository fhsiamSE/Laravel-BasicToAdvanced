<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class teacher extends Model
{
    use HasFactory;
    
    protected $guarded = []; // Protecting the 'teacher_id' field from mass assignment, allowing all other fields to be mass assignable
    //protected $fillable = ['full_name', 'email', 'gender', 'roomNumber']; // Allowing only the specified fields to be mass assignable
}
