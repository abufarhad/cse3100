<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();

class FtptController extends Controller
{
    public function ftptwork()
    {
        return view('ft_pt_work');
    }
    public function saveftpt(request $requ)
    {
        $data= array();
        $data['project_id']=$requ->project_id;
        $data['emp_id']=$requ->emp_id;
        $data['dept_id']=$requ->dept_id;
        $data['num_of_hours']=$requ->num_of_hours;
        $data['works_date']=$requ->works_date;

        DB::table('ft_pt_work')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message','Registered Successfully');
    }
    public function viewftpt()
    {
        $ftptview_info=DB::table('ft_pt_work')->get();
        $mange_ftpt=view("viewftptwork")
                        ->with('ftpt_view_info',$ftptview_info);
        return view('layout')
                    ->with('viewftptwork',$mange_ftpt);                
    }

}
