<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function getAllUsers()
    {
        $courses = Course::with('users')->get();
        return view('course-users-list', ['courses' => $courses]);
    }
}