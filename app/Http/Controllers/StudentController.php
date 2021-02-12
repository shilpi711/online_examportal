<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Student;
use App\Exammaster;

class StudentController extends Controller
{      
	 public function login()
	 {
   	return view('student.studentlogin');
     }

     public function studentsignup()
   {
     $data=Exammaster::orderBY('id','DESC')->get();
    return view('student.studentsignup',compact('data'));
     }
     public function studentsavesignup(Request $request){
        
        $data = new Student;
         $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->dob = $request->dob;
         $data->exam = $request->exam;
         $data->status = $request->status=1;
        
         $data->password = $request->password; 
           //table(title) from(title)
           $data->save();
         //dd($data);

         if($data){
            return redirect('studentsignup')->with('message','data successfully Added');  //flash message session
         }
     }



     public function submitlogin( Request $request){
     	//print_r($request->all());
     $student =Student::where('email',$request->email)->where('password',$request->password)->get()->toArray();
     // print_r($portal);
     if($student){
      if($student[0]['status']==1){

        $request->Session()->put('student_session',$student[0]['id']);
        return redirect('student/studentdashboard');
      }
      else{
       return redirect('student/login')->with('message','wrong password');
      }



     }
     else{
      return redirect('student/login')->with('message','wrong password');
     }

    
  }
    
}
