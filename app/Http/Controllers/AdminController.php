<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index()
    {
        $studentCount = \App\Models\User::count();
        $students = \App\Models\User::latest()->take(5)->get(); // Get the 5 newest students

        return view('admin.dashboard', compact('studentCount', 'students'));
    }
}
