<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        // Get the logged-in student's data
        $student = Auth::user();

        return view('student.dashboard', compact('student'));
    }
}
