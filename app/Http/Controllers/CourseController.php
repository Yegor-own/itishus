<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::orderByDesc('created_at')->get();
        return view('courses', [
            'courses' => $courses
        ]);
    }
}
