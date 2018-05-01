<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/save_employee', 'EmployeeController@empsave');
Route::post('/save_department', 'DepartmentController@depsave');
Route::post('/save_project', 'ProjectController@projsave');
Route::post('/save_address', 'AddressController@saveaddress');
Route::post('/save_ftpt', 'FtptController@saveftpt');
Route::post('/save_salary', 'SalaryController@savesalary');





Route::get('/employee', 'EmployeeController@emp');
Route::get('/project', 'ProjectController@proj');
Route::get('/department', 'DepartmentController@dep');
Route::get('/ftptwork', 'FtptController@ftptwork');
Route::get('/salary', 'SalaryController@salary');
Route::get('/address', 'AddressController@address');


Route::get('/viewemployee', 'EmployeeController@viewemp');
Route::get('/viewdepartment', 'DepartmentController@viewdep');
Route::get('/viewproject', 'ProjectController@viewproj');
Route::get('/viewftptwork', 'FtptController@viewftpt');
Route::get('/viewsalary', 'SalaryController@viewsalary');
Route::get('/viewaddress', 'AddressController@viewaddress');

Route::get('/run1stquery', 'RunqueryController@run1stquery');
Route::get('/run2ndquery', 'RunqueryController@run2ndquery');
Route::get('/run3rdquery', 'RunqueryController@run3rdquery');
Route::get('/run4thquery', 'RunqueryController@run4thquery');
Route::get('/runviewquery', 'RunqueryController@runviewquery');



