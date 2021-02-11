<?php

use Illuminate\Support\Facades\Route;

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



//admin
Route::get("admin","AdminController@index");
//addslide
Route::get("category","AdminController@category");



//datainsert in data
Route::post('datacategory','AdminController@datacategory');

//edit
Route::get("/editcategory/{id}","AdminController@editcategory");
//update
Route::post("updatecategory","AdminController@updatecategory");
//delete
Route::get("category/deletecategory/{id}","AdminController@deletecategory");


//MANAGEEXAM
//add
Route::get("manageexam","AdminController@manageexam");
//datainsert in data
Route::post('datamanageexam','AdminController@datamanageexam');
//edit
Route::get("/editmanageexam/{id}","AdminController@editmanageexam");
//update
Route::post("updatemangeexam","AdminController@updatemangeexam");
//delete
Route::get("manageexam/deletemanageexam/{id}","AdminController@deletemanageexam");



//student
Route::get("student","AdminController@student");
//datainsert in data
Route::post('datastudent','AdminController@datastudent');
//edit
Route::get("/editstudent/{id}","AdminController@editstudent");
//update
Route::post("updatestudent","AdminController@updatestudent");
//delete
Route::get("deletestudent/{id}","AdminController@deletestudent");



//potal
Route::get("portal","AdminController@portal");
//datainsert in data
Route::post('dataportal','AdminController@dataportal');
//edit
Route::get("/editportal/{id}","AdminController@editportal");
//update
Route::post("updateportal","AdminController@updateportal");
//delete
Route::get("deleteportal/{id}","AdminController@deleteportal");

//potal//signup
Route::get("portal/signup","PortalController@signup");
//datainsert in data
Route::post('portalsignup',"PortalController@portalsignup");
//login
Route::get("portal/login","PortalController@login");
//datainsert in data
Route::post('savelogin','PortalController@savelogin');



//portal operation
Route::get('portal/dashboard','PortalOperationController@dashboard');
Route::get('portal/examform/{id}','PortalOperationController@examform');
//
Route::get('portal/print/{id}','PortalOperationController@print');
Route::post('portal/examformsubmit','PortalOperationController@examformsubmit');
Route::get('portal/updateexamform','PortalOperationController@updateform');
Route::get('portal/updateexamform','PortalOperationController@updateform');
Route::get('portal/studentexaminfo','PortalOperationController@studentexaminfo');
Route::post('portal/updatestudentinfo','PortalOperationController@updatestudentinfo');
Route::get('portal/logout',"PortalOperationController@logout");



//admin add questions
Route::get("addquestion/{id}","AdminController@addquestion");
//insert
Route::post('savequestion',"AdminController@savequestion");
//edit questions
Route::get("/editaddquestion/{id}","AdminController@editaddquestion");
//updatequestion
Route::post("updatequestion","AdminController@updatequestion");
//delete question
Route::get("deletequestion/{id}","AdminController@deletequestion");






//studentcontroller
//student login
Route::get("/","StudentController@login");
//student signup
Route::get("student/studentsignup","StudentController@studentsignup");
//insert
Route::post('studentsavesignup',"StudentController@studentsavesignup");
//match login
Route::post('submitlogin','StudentController@submitlogin');



//studentoperationcontroller
Route::get('student/studentdashboard','StudentOperationController@studentdashboard');
//studentexam
Route::get('student/studentexam','StudentOperationController@studentexam');
//password
Route::get('student/password','StudentOperationController@password');
//editpassword
Route::get("/editpassword/{id}","StudentOperationController@editpassword");
//update password
Route::post("updatepassword","StudentOperationController@updatepassword");
//joinexam
Route::get('student/studentjoinexam/{id}','StudentOperationController@studentjoinexam');
//sumit_question
Route::post('student/submit_question',"StudentOperationController@submit_question");
//logoutstudent
Route::get('student/studentlogout',"StudentOperationController@studentlogout");
//showresult
Route::get('student/showresult/{id}',"StudentOperationController@showresult");




Auth::routes();
//admin
Route::get("admin","AdminController@index");

//Route::get('/home', 'HomeController@index')->name('home');
