@extends('layout')
@section('content')
<div class="w3-modal-content">
        <header class="w3-container w3-teal"> 
          <h2>3rd Query</h2>
        </header>
        <div class="w3-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Street Name</th>   
                        <th>City</th> 
                        <th>Street No</th>
                        <th>Dept. Location</th> 
                        <th>Project loc</th>                                     
                    </tr>
                </thead>   
                <tbody>        
                    @foreach($v_emp as $emp)
                                <tr>
                                    <td>{{$emp->emp_name}}</td>
                                    <td class="center">{{$emp->street_name}}</td>  
                                    <td class="center">{{$emp->city}}</td> 
                                    <td class="center">{{$emp->street_no}}</td> 
                                    <td class="center">{{$emp->dept_location}}</td> 
                                    <td class="center">{{$emp->project_location}}</td>                  
                                </tr> 
                    @endforeach                                  
                </tbody>  
            </table> 
        </div>
        <footer class="w3-container w3-teal">
          <p>Run succesfully!</p>
        </footer>
      </div>
    </div>


</div>
@endsection