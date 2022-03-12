<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    public function store() {
        $data = request()->all();
        dump($data);
    }
}
