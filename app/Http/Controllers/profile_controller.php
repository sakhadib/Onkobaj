<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

use App\Models\Solver;
use App\Models\Upozilla;
use App\Models\District;
use App\Models\Submission;
use App\Models\Problemset;
use App\Models\Level;

class profile_controller extends Controller
{
    public function profile($id)
    {
        $solver = Solver::where('id', $id)->first();
        $upozilla = Upozilla::where('id', $solver->upozilla_id)->first();
        $district = District::where('id', $solver->district_id)->first();

        $submissions = Submission::where('solver_id', $id)->orderBy('created_at', 'desc')->get();

        $correct_count = Submission::where('solver_id', $id)->sum('correct_count');
        $wrong_count = Submission::where('solver_id', $id)->sum('incorrect_count');

        $mod_submissions = [];

        $total_point = 0;
        $totla_minutes = 0;

        foreach($submissions as $submission){
            $problem = Problemset::where('id', $submission->problemset_id)->first();
            $level = Level::where('id', $problem->level_id)->first();

            $modifoed_submission = (object)[
                'problem' => $problem,
                'level' => $level,
                'submission' => $submission,
                'point' => $submission->correct_count * $level->points,
                'minutes_spent' => Carbon::parse($submission->start_time)->diffInMinutes($submission->created_at),
            ];

            array_push($mod_submissions, $modifoed_submission);

            $total_point += $modifoed_submission->point;
            $totla_minutes += $modifoed_submission->minutes_spent;

        }

        


        return view('profile',
        [
            'solver' => $solver,
            'upozilla' => $upozilla,
            'district' => $district,
            'submissions' => $mod_submissions,
            'total_point' => $total_point,
            'correct_count' => $correct_count,
            'wrong_count' => $wrong_count,
            'total_minutes' => $totla_minutes,
        ]);
    }
}
