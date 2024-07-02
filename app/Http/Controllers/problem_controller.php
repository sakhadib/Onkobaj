<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Problemset;
use App\Models\Level;
use App\Models\Solver;
use App\Models\Submission;

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
        if(session('solver') == null){
            return redirect('/login');
        }
        
        $problem = Problemset::where('slug', $slug)->first();
        return view('problem',
        [
            'problem' => $problem
        ]);
    }


    public function submit(Request $request, $slug)
    {
        $problem = Problemset::where('slug', $slug)->first();
        $solver = Solver::where('id', session('solver')->id)->first();
        $correct = $request->correct;
        $incorrect = $request->incorrect;
        $start_date = $request->date;
        $start_time = $request->time;
        $start_datetime = \Carbon\Carbon::parse($start_date . ' ' . $start_time)->toDateTimeString();
        

        $submission = new Submission();
        $submission->solver_id = $solver->id;
        $submission->problemset_id = $problem->id;
        $submission->correct_count = $correct;
        $submission->incorrect_count = $incorrect;
        $submission->start_time = $start_datetime;

        $submission->save();

        return redirect('/profile/' . $solver->id);
    }



    
}
