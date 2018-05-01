<!DOCTYPE html>
<html>
<head>
    
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/form.css')}}">
<link rel="stylesheet" type="text/js" href="{{ asset('css/employee.js')}}">
    
</head>
<body>
    @extends('layout')
    @section('content')
    <div class="header" style="width:700px;margin:auto;">
            <h2>Address Register</h2>
        </div>
        <form class="form-horizontal" method="POST" action="{{url('/save_address')}}" style="width:700px;margin:auto;">
            {{ csrf_field() }}
            @if(session()->has('message'))
        <div class="alert alert-success">
             {{ session()->get('message') }}
        </div>
     @endif
        <div class="input-group">
             <label>Employee Id</label>
            <input type="number" name="emp_id" value="">
         </div>    
        <div class="input-group">
            <label>Street No.</label>
            <input type="text" name="street_no" placeholder="street no." value="">
        </div> 
        <div class="input-group">
                <label>Street Name</label>
                <input type="text" name="street_name" placeholder="street name" value="">
        </div> 
        <div class="input-group">
                <label>City</label>
                <input type="text" name="city" placeholder="city" value="">
        </div>
        <div class="input-group">
                <label>ZIP</label>
                <input type="number" name="zip_code" value="">
        </div> 
        
        <div class="input-group">
            <button type="submit" name="register" class="btn btn-danger">Register Employee Address</button>
    
        </div>
    </form>  
    

    @endsection
    </body>
    </html>     