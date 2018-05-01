<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AddressController extends Controller
{
    public function address()
    {
        return view('address');
    }
    public function saveaddress(request $requ)
    {
        $data= array();
        $data['emp_id']=$requ->emp_id;
        $data['street_no']=$requ->street_no;
        $data['street_name']=$requ->street_name;
        $data['city']=$requ->city;
        $data['zip_code']=$requ->zip_code;

        DB::table('address')->insert($data);
        //Session::put('message','Add successfully.');
        return redirect()->back()->with('message', 'Registered Successfully!');
    }
    public function viewaddress()
    {
        $addview_info=DB::table('address')->get();
        $mange_add=view("viewaddress")
                        ->with('address_view_info',$addview_info);
        return view('layout')
                    ->with('viewaddress',$mange_add);                
    }

}
