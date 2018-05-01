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
    <h2> Employee Table</h2>
    <br>
    <div class="row-fluid sortable">
            <div class="box span6">
                <div class="box-header" style="width:700px">
                    <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Employee Table</h2><br><br>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                
                <div class="box-content"style="width:900px">
                    <table class="table">
                          <thead>
                              <tr>
                                  <th>Employee ID</th>
                                  <th>Employee Name</th>
                                  <th>Department Id</th>
                                  <th>Type of work</th>      
                                  <th>Hourly Rate</th>                                          
                              </tr>
                          </thead>   
                          <tbody>
                            
                            @foreach($emp_view_info as $v_emp)
                            <tr>
                                <td>{{$v_emp->emp_id}}</td>
                                <td class="center">{{$v_emp->emp_name}}</td>
                                <td class="center">{{$v_emp->dept_id}}</td>
                                <td class="center">{{$v_emp->type_of_work}}</td>
                                <td class="center">{{$v_emp->hourly_rate}}</td>
                                <td class="center">
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>                                        
                            </tr> 
                            @endforeach                                  
                          </tbody>
                     </table> 
                    </div>
                </div>
        @endsection
            
    </body>
</html>