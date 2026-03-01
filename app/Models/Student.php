<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'course',
        'yearlvl',
        'email'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($student) {
            $student->email = strtolower($student->firstname) . '.' . strtolower($student->lastname) . '@example.com';
        });
    }
}
