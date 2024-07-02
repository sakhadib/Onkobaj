<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\District;
use App\Models\Upozilla;
use App\Models\Solver;

class login_controller extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function signup()
    {
        $districts = District::all();
        
        return view('register',
        [
            'districts' => $districts
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|String|max:255',
            'email' => 'required|email|unique:solvers',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|same:password',
            'school' => 'required|String|max:255',
            'upozilla' => 'required|String|max:255',
            'district' => 'required|String|max:255',

        ]);

        $upozilla = Upozilla::where('name', $request->upozilla)->where('district_id', $request->district)->first();
        if($upozilla == null){
            $up = new Upozilla();
            $up->name = $request->upozilla;
            $up->district_id = $request->district;
            $up->save();

            $upozilla = Upozilla::where('name', $request->upozilla)->where('district_id', $request->district)->first();
        }

        $randomNumber = rand(1, 15);

        $solver = new Solver();
        $solver->name = $request->name;
        $solver->email = $request->email;
        $solver->password = md5($request->password);
        $solver->school = $request->school;
        $solver->upozilla_id = $upozilla->id;
        $solver->district_id = $request->district;
        $solver->avatar = '1.jpg';

        $solver->save();

        return redirect('/login')->with('success', 'আপনার একাউন্ট তৈরি হয়েছে। লগইন করুন।');

    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $solver = Solver::where('email', $request->email)->where('password', md5($request->password))->first();

        if($solver == null){
            return redirect('/login')->with('error', 'ভুল ইমেইল অথবা পাসওয়ার্ড। আবার চেষ্টা করুন।');
        }

        session([
            'solver' => $solver
        ]);

        return redirect('/problemset');
    }


    public function logout(){
        session()->flush();
        return redirect('/login');
    }
}
