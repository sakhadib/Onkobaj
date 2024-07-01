<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class problem_controller extends Controller
{
    public function index()
    {
        return view('problemset');
    }
}
