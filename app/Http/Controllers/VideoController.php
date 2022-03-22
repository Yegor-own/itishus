<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($course_id) {
        $videos = Video::where('course_id', $course_id)->firstOrFail();
        return redirect('/courses/'.$course_id.'/video/'.$videos->id.'/');
    }
    public function show($course_id, $video)
    {
        $videos_list = Video::where('course_id', $course_id)->get();
        $video = Video::where([['id', $video], ['course_id', $course_id]])->firstOrFail();
        return view('course', compact('videos_list', 'video', 'course_id'));
    }
}
