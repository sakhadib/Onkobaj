<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extra_controller extends Controller
{
    public function rules(){
        return view('rules');
    }
}
