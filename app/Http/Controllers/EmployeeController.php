<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();

class EmployeeController extends Controller
{
    public function emp()
    {
        return view('employee');
    }
    public function empsave(request $requ)
    {
        $data= array();
        $data['emp_name']=$requ->emp_name;
        $data['dept_id']=$requ->dept_id;
        $data['type_of_work']=$requ->type_of_work;
        $data['hourly_rate']=$requ->hourly_rate;

        DB::table('employee')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message','Registered Successfully');
    }
    public function viewemp()
    {
        $empview_info=DB::table('employee')->get();
        $mange_employee=view("viewemployee")
                        ->with('emp_view_info',$empview_info);
        return view('layout')
                    ->with('viewemployee',$mange_employee);                
    }

}
