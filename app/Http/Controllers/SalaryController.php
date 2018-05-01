<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SalaryController extends Controller
{
    public function salary()
    {
        return view('salary');
    }
    public function savesalary(request $requ)
    {
        $data= array();
        $data['emp_id']=$requ->emp_id;
        $data['basic']=$requ->basic;
        $data['salary_date']=$requ->salary_date;

        DB::table('salary')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message','Registered Successfully');
    }
    public function viewsalary()
    {
        $salview_info=DB::table('salary')->get();
        $mange_salary=view("viewsalary")
                        ->with('salary_view_info',$salview_info);
        return view('layout')
                    ->with('viewsalary',$mange_salary);                
    }
}
