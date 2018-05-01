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
        <h2>FT_PT_WORK Register</h2>
    </div>
    <form class="form-horizontal" method="POST" action="{{url('/save_ftpt')}}" style="width:700px;margin:auto;">
        {{ csrf_field() }}
        @if(session()->has('message'))
        <div class="alert alert-success">
             {{ session()->get('message') }}
        </div>
        @endif
        <div class="input-group">
                <label>Project ID</label>
                <input type="number" name="project_id" value="">
        </div> 
        <div class="input-group">
                    <label>Employee ID</label>
                    <input type="number" name="emp_id" value="">
        </div> 
        <div class="input-group">
                    <label>Department ID</label>
                    <input type="number" name="dept_id" value="">
        </div> 
        <div class="input-group">
                <label>Number of hours</label>
                <input type="number" name="num_of_hours" value="" max="8" min="0">
        </div> 
        <div class="input-group">
                    <label>Works Date</label>
                    <input type="date" name="works_date" value="">
        </div> 
        <div class="input-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
                  
        
</form>  

@endsection
</body>
</html>     