<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RunqueryController extends Controller
{
    public function run1stquery()
    {
        $sql = "SELECT employee.emp_name,dept.dept_name,project.project_location"

    . "        FROM employee INNER JOIN ft_pt_work ON employee.emp_id=ft_pt_work.emp_id INNER JOIN project ON ft_pt_work.project_id=project.project_id AND ft_pt_work.dept_id IN (SELECT dept.dept_id FROM dept WHERE dept.dept_name='Engineering') AND ft_pt_work.project_id IN (SELECT project.project_id FROM project WHERE project.project_name='Googong Subdivision') INNER JOIN dept ON employee.dept_id=dept.dept_id";

        // DB::enableQueryLog();
     $engview_info=DB::select($sql);
        return view('run1stquery')
                    ->with('v_emp',$engview_info);                
    }
    public function run2ndquery()
    {
        
       $sql="SELECT distinct(employee.emp_id),employee.emp_name,dept.dept_name
       FROM employee,dept,project,ft_pt_work
       WHERE employee.dept_id=dept.dept_id AND employee.emp_id=ft_pt_work.emp_id 
       AND ft_pt_work.project_id=project.project_id AND 
       dept.dept_name='Labour' and project.project_name='Googong Subdivision' and
       project.project_location='Googong'";
        $query_2nd=DB::select($sql);
       
                        
        return view('run2ndquery')
                    ->with('v_emp',$query_2nd);                           
    }
    public function run3rdquery()
    {
        $eg_info="SELECT employee.emp_name, address.street_name, address.city, address.street_no, dept.dept_location, project.project_location
        FROM employee INNER JOIN ft_pt_work ON employee.emp_id=ft_pt_work.emp_id INNER JOIN project ON ft_pt_work.project_id=project.project_id AND project.project_location='Burton Canberra' AND employee.dept_id NOT IN (SELECT dept.dept_id FROM dept WHERE dept.dept_location='Canberra') INNER JOIN address ON employee.emp_id=address.emp_id INNER JOIN dept ON employee.dept_id=dept.dept_id";
        
        $query_3rd=DB::select($eg_info);
                        
        return view('run3rdquery')
                    ->with('v_emp',$query_3rd);      
    }
    public function run4thquery()
    {
        $e4_info="SELECT num.emp_name, COUNT(num.emp_name) AS Total_Project, 

        GROUP_CONCAT(DISTINCT num.project_location) AS 
        
        Project_Locations FROM ((SELECT employee.emp_name, 
        
        project.project_location FROM employee, project, ft_pt_work 
        WHERE employee.emp_id=ft_pt_work.emp_id AND 
        
        project.project_id=ft_pt_work.project_id AND 
        
        project.project_name='Googong Subdivision')
        UNION 
        (SELECT employee.emp_name, project.project_location FROM 
        
        employee, project, ft_pt_work WHERE 
        
        employee.emp_id=ft_pt_work.emp_id AND 
        
        project.project_id=ft_pt_work.project_id AND 
        
        project.project_name='Burton Highway'))
        AS num GROUP BY num.emp_name HAVING COUNT(num.emp_name)=2";
        
        $query_4th=DB::select($e4_info);
       
                        
         return view('run4thquery')
                     ->with('v_emp',$query_4th);   
    }
    public function runviewquery()
    {
        $eg_info="SELECT distinct(employee.emp_id),
        employee.emp_name,
        dept.dept_name,
        employee.type_of_work,
        salary.basic,
        (salary.basic*0.45) AS Allowance,
        (salary.basic*0.24) AS Deduction,
        (salary.basic*1.21) AS Salary
    FROM
        employee,dept,salary
    WHERE employee.emp_id= salary.emp_id AND employee.dept_id=dept.dept_id";
        
        $query=DB::select($eg_info);
                        
        return view('runview')
                    ->with('v_emp',$query);      
    }
}
