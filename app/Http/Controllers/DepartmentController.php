<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();

class DepartmentController extends Controller
{
    public function dep()
    {
        return view('department');
    }
    public function depsave(request $requ)
    {
        $data= array();
        $data['dept_name']=$requ->dept_name;
        $data['dept_location']=$requ->dept_location;

        DB::table('dept')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message', 'Registered Successfully!');
    }
    public function viewdep()
    {
        $depview_info=DB::table('dept')->get();
        $mange_employee=view("viewdepartment")
                        ->with('dept_view_info',$depview_info);
        return view('layout')
                    ->with('viewdepartment',$mange_employee);                
    }
}
