<!DOCTYPE html>
<html>
<head>
    
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/form.css')}}">
<link rel="stylesheet" type="text/js" href="{{ asset('css/employee.js')}}">
<script>
function myFunction()
{
   var v= document.getElementById("ft").value();
   if($v=='f')
   {
       document.getElementById("demo".disabled=true;)
   }
   if($v=='p')
   {
       document.getElementById("basic".disabled=true;)
   }
    
}
</script>
</head>
<body>
    <div>
    @extends('layout')
    @section('content')
    <div class="header" style="width:700px; margin:auto;" >
        <h2> Employee  Register</h2>
    </div>
    <form class="form-horizontal" method="POST" action="{{url('/save_employee')}}" style="width:700px; margin:auto;">
        {{ csrf_field() }}
        @if(session()->has('message'))
        <div class="alert alert-success">
             {{ session()->get('message') }}
        </div>
        @endif
        <div class="input-group">
            <label>Employee Name</label>
            <input type="text" name="emp_name" value="" placeholder="employee name">
        </div> 
        <div class="input-group">
            <label>Department ID</label>
            <input type="number" name="dept_id" max="5" min="1">   
        </div> 
        <div class="input-group" onselect="myFunction">
          <fieldset class="radiogroup"> 
                <legend>Type of work</legend> 
                        
                   <input type="radio" name="type_of_work" id="ft" value="f" />  Fulltime <br>
                   <input type="radio" name="type_of_work" id="ft" value="p" />  PartTime 
                  
                </fieldset> 
        </div>
        
        <div class="input-group" id="demo">
                <label>Hourly rate</label>
                <input type="number" name="hourly_rate" max="60" min="25" value="50"><br>
         </div>
        
        <div class="input-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        
    </form>  
@endsection
</div>
</body>
</html>     