<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Solver;
use App\Models\Submission;
use App\Models\District;

class lb_controller extends Controller
{
    public function index()
    {
        $solvers = Solver::all();

        $mod_solvers = [];

        foreach ($solvers as $solver) {
            $mod_solver = (object)[
                'solver' => $solver,
                'correct' => Submission::where('solver_id', $solver->id)->sum('correct_count'),
                'wrong' => Submission::where('solver_id', $solver->id)->sum('incorrect_count'),
                'district' => District::where('id', $solver->district_id)->first()->name ?? 'N/A',
            ];

            array_push($mod_solvers, $mod_solver);

        }
        return view('leaderboard',
            [
                'solvers' => $mod_solvers
            ]
        );
    }
}
