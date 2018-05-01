<!DOCTYPE html>
<html>
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
            <div class="header" style="width:700px;margin: auto;">
                <h2>Salary Register</h2>
            </div>
            <form class="form-horizontal" method="POST" action="{{url('/save_salary')}}" style="width:700px;margin: auto;">
                {{ csrf_field() }}
                @if(session()->has('message'))
                <div class="alert alert-success">
                     {{ session()->get('message') }}
                </div>
                @endif
        <div class="input-group">
            <label>Employee ID</label>
            <input type="number" name="emp_id" value="">
        </div> 
        <div class="input-group">
            <label>Basic</label>
            <input type="number" name="basic" value="">
        </div> 
        <div class="input-group">
                <label>Salary Date</label>
                <input type="date" name="salary_date" value="">
        </div> 
        
        <div class="input-group">
            <button type="submit" name="register" class="btn btn-danger">Register Employee Salary</button>
    
        </div>
        
</form>   
@endsection
</body>
</html>    