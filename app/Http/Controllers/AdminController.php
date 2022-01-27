<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->isadmin) {
            return view('admin');
        } else {
            return response()->redirectTo('/home');
        }
    }
}
