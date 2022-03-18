<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list() {
        $courses = Course::orderByDesc('created_at')->get();
        return view('courses', [
            'courses' => $courses
        ]);
    }
    public function read($course) {
        $videos = Video::orderByDesc('created_at')->get();
        return view('course', [
            'videos' => $videos,
            'course' => $course
        ]);
    }
}
