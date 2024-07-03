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
        return view('problemset');
    }

    public function set($level)
    {
        if(session('solver') == null){
            return redirect('/login');
        }

        $problems = Problemset::where('for_class', $level)->get();

        if($level < 9 && $level > 0 && $problems == null){
            return view('nai');
        }

        if($level <= 0 || $level > 10){
            return view('not');
        }

        return view('set',
        [
            'problems' => $problems
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
