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
    <div class="header" style="width:700px; margin:auto;">
            <h2>Project Register</h2>
        </div>
        <form class="form-horizontal" method="POST" action="{{url('/save_project')}}" style="width:700px;margin:auto;">
            {{ csrf_field() }}    
            @if(session()->has('message'))
            <div class="alert alert-success">
                 {{ session()->get('message') }}
            </div>
            @endif
        <div class="input-group">
            <label>Project Name</label>
            <input type="text" name="project_name" placeholder="project name" value="">
        </div> 
        <div class="input-group">
                <label>Project Location</label>
                <input type="text" name="project_location" placeholder="project location" value="">
        </div> 
        
        <div class="input-group">
            <button type="submit" name="register" class="btn btn-danger">Register Project</button>
    
        </div>
       
</form>   
@endsection
</body>
</html>     