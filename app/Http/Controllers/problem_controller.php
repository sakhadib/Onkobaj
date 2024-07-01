<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Problemset;
use App\Models\Level;

class problem_controller extends Controller
{
    public function index()
    {
        $class_1_problems = Problemset::where('for_class', 1)->get();
        $class_2_problems = Problemset::where('for_class', 2)->get();
        $class_3_problems = Problemset::where('for_class', 3)->get();
        $class_4_problems = Problemset::where('for_class', 4)->get();
        $class_5_problems = Problemset::where('for_class', 5)->get();
        $class_6_problems = Problemset::where('for_class', 6)->get();
        $class_7_problems = Problemset::where('for_class', 7)->get();
        $class_8_problems = Problemset::where('for_class', 8)->get();
        $class_9_problems = Problemset::where('for_class', 9)->get();

        return view('problemset',
        [
            'class_1_problems' => $class_1_problems,
            'class_2_problems' => $class_2_problems,
            'class_3_problems' => $class_3_problems,
            'class_4_problems' => $class_4_problems,
            'class_5_problems' => $class_5_problems,
            'class_6_problems' => $class_6_problems,
            'class_7_problems' => $class_7_problems,
            'class_8_problems' => $class_8_problems,
            'class_9_problems' => $class_9_problems,
        ]);

    }


    public function show($slug)
    {
        $problem = Problemset::where('slug', $slug)->first();
        return view('problem',
        [
            'problem' => $problem
        ]);
    }
}
