<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard() {
        if (Auth::user()->is_admin) {
            $courses = Course::orderByDesc('created_at')->get();
            return view('admin.dashboard', [
                'courses' => $courses
            ]);
        }
        else {
            return redirect('/login');
        }
    }
}
