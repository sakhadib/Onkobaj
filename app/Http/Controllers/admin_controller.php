<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Level;
use App\Models\Problemset;

class admin_controller extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function store(Request $request)
    {
               

        if($request->hehe == 'onek_boro_hehe' && $request->HEHE == 'choto_choto_hehe'){
            session([
                'hehe' => 'shuvro'
            ]);
            return redirect('/shuvrodaadmin');
        }

        else{
            return redirect('/iamshuvro');
        }
        
        
    }


    public function input()
    {
        if(session('hehe') != 'shuvro'){
            return redirect('/login');
        }

        $levels = Level::all();


        
        return view('admin.input',
        [
            'levels' => $levels
        ]
    );

    }



    public function inputstore(Request $request){
        if(session('hehe') != 'shuvro'){
            return redirect('/login');
        }

        $request->validate([
            'level_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'imports' => 'required',
            'body' => 'required',
            'css' => 'required',
            'js' => 'required',
            'for_class' => 'required',
        ]);


        $problemset = new Problemset();
        $problemset->level_id = $request->level_id;
        $problemset->title = $request->title;
        $problemset->description = $request->description;
        $problemset->slug = $request->slug;
        $problemset->imports = $request->imports;
        $problemset->body = $request->body;
        $problemset->css = $request->css;
        $problemset->js = $request->js;
        $problemset->for_class = $request->for_class;

        $problemset->save();

        return redirect('/shuvrodaadmin')->with('success', 'প্রবলেমটি সফলভাবে যোগ করা হয়েছে।');

        
    }
}
