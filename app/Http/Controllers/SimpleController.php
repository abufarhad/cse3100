<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    
    public function proj()
    {
        return view('project');
    }
    
    public function ftptwork()
    {
        return view('ft_pt_work');
    }
    public function salary()
    {
        return view('salary');
    }
}
