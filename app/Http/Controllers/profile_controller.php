<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $submissions = Submission::where('solver_id', $id)->get();

        $mod_submissions = [];

        $total_point = 0;

        foreach($submissions as $submission){
            $problem = Problemset::where('id', $submission->problemset_id)->first();
            $level = Level::where('id', $problem->level_id)->first();

            $modifoed_submission = (object)[
                'problem' => $problem,
                'level' => $level,
                'submission' => $submission,
                'point' => $submission->correct_count * $level->points
            ];

            array_push($mod_submissions, $modifoed_submission);

            $total_point += $modifoed_submission->point;

        }


        return view('profile',
        [
            'solver' => $solver,
            'upozilla' => $upozilla,
            'district' => $district,
            'submissions' => $mod_submissions,
            'total_point' => $total_point
        ]);
    }
}
