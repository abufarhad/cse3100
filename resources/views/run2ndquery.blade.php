@extends('layout')
@section('content')
<div class="w3-modal-content">
        <header class="w3-container w3-teal"> 
          <h2>2nd Query</h2>
        </header>
        <div class="w3-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Department Name</th>                                     
                    </tr>
                </thead>   
                <tbody>
                           
                    @foreach($v_emp as $emp)
                                <tr>
                                    <td>{{$emp->emp_id}}</td>
                                    <td class="center">{{$emp->emp_name}}</td>     
                                    <td class="center">{{$emp->dept_name}}</td>                   
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