<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CourseVideoController extends Controller
{
    public function index($course_id) {
        $videos = Video::where('course_id', $course_id)->firstOrFail();
        return redirect('/courses/'.$course_id.'/videos/'.$videos->id.'/');
    }

    public function show($course_id, $video_id) {
        $videos_list = Video::where('course_id', $course_id)->get();
        $video = Video::where([['id', $video_id], ['course_id', $course_id]])->firstOrFail();
        return view('course', compact('videos_list', 'video', 'course_id'));
    }

    public function list($course_id) {
        $videos = Video::where('course_id', $course_id)->first();
        if ($videos == null) {
            return redirect('/courses/'.$course_id.'/videos/create');
        }
        else {
            return redirect('/courses/'.$course_id.'/videos/'.$videos->id.'/edit');
        }
    }

    public function edit($course_id, $video_id) {
        $videos_list = Video::where('course_id', $course_id)->get();
        $video = Video::where([['id', $video_id], ['course_id', $course_id]])->firstOrFail();
        return view('admin.course.video.edit', compact('videos_list', 'video', 'course_id'));
    }

    public function store(Request $request, $course_id) {
        if (Auth::user()->is_admin) {
            $request->validate([
                'link' => 'required',
                'title'=> 'required',
                'content' => 'required'
            ]);
            $video = new Video;
            $video->course_id = $course_id;
            $video->video_link	 = $request->link;
            $video->title = $request->title;
            $video->content = $request->content;
            $video->save();    
            return redirect('/courses/');
        }
    }

    public function create($course_id) {
        return view('admin.course.video.create', ['course_id'=>$course_id]);
    }

    public function update(Request $request, $couese_id, $video_id) {
        if (Auth::user()->is_admin) {
            $request->validate([
                'link' => 'required',
                'title'=> 'required',
                'content' => 'required'
            ]);
            $video = Video::find($video_id);
            $video->video_link = $request->link;
            $video->title = $request->title;
            $video->content = $request->content;
            $video->save();
            return redirect('/admin/dashboard/');
        }

    }

    public function destroy() {

    }
}
