<?php

namespace App\Models;

// Eloquent Model gives this class all database ORM features
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * $fillable tells Laravel which fields are allowed
     * to be mass-assigned when using:
     *
     *     Student::create([...])
     *     $student->update([...])
     *
     * This protects the application from mass-assignment attacks.
     *
     * In this mini project, we only allow "name" and "grade".
     */
    protected $fillable = ['name', 'grade'];
}
