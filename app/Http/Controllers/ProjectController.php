<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class ProjectController extends Controller
{
    public function proj()
    {
        return view('project');
    }
    public function projsave(request $requ)
    {
        $data= array();
        $data['project_name']=$requ->project_name;
        $data['project_location']=$requ->project_location;

        DB::table('project')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message', 'Registered Successfully');
    }
    public function viewproj()
    {
        $projview_info=DB::table('project')->get();
        $mange_proj=view("viewproject")
                        ->with('proj_view_info',$projview_info);
        return view('layout')
                    ->with('viewproject',$mange_proj);                
    }
}
