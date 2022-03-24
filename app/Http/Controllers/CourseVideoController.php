<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseVideoController extends Controller
{
    public function index($course_id) {
        // return "index";
        $videos = Video::where('course_id', $course_id)->firstOrFail();
        return redirect('/courses/'.$course_id.'/videos/'.$videos->id.'/');
    }
    public function show($course_id, $video_id) {
        $videos_list = Video::where('course_id', $course_id)->get();
        $video = Video::where([['id', $video_id], ['course_id', $course_id]])->firstOrFail();
        return view('course', compact('videos_list', 'video', 'course_id'));
    }
    public function edit() {

    }
    public function store() {

    }
    public function create() {

    }
    public function update() {

    }
    public function destroy() {

    }
}
