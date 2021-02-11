<?php

namespace App\Http\Controllers;
use Session;
use App\Exammaster;
use App\Student;

use Illuminate\Http\Request;

class PortalOperationController extends Controller
{
    public function dashboard()
    {   
    	 //echo $session_data=Session::get('portal_session');
    	if(!Session::get('portal_session'))
    	{
    		return redirect(url('portal/login'));
    	}
    	
    	$data=Exammaster::where('status','1')->get();
    	// echo"<pre>";
    	// print_r($data);
    	// exit();
    	
    	return view('portal.dashboard',compact('data'));

    }
    
     public function examform($id)
    { 
    	$data=Exammaster::find($id);
    	return view('portal.examform',compact('data'));
    }

     
     public function examformsubmit(Request $request){

        $data=new Student;
        $data->exam=$request->id;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->dob=$request->dob;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->status=1;
        $data->save();
         
        // echo "<pre>";
        // print_r($data);
        // exit();

        if($data)
            
        {
            return redirect('portal/print/'.$data->id);
        }
    }

    public function print($id){

        // echo $id;
         $data=Student::where('id',$id)->first();
         // print_r($data);

         $exam=Exammaster::where('id',$data->exam)->first();

         return view('portal.print',compact('data','exam'));
     
     }

      public function updateform()
      {
        $exam = Exammaster::where('status','1')->get();
        return view('portal.updateform',compact('exam'));
    }
    public function studentexaminfo()
    {
        // print_r($_GET);
        $studentinfo=Student::where('exam',$_GET['exam'])->where('mobile',$_GET['mobile'])->where('dob',$_GET['dob'])->first();
       //print_r($studentinfo);
        return view('portal.studentexaminfo',compact('studentinfo'));
    }
     public function updatestudentinfo(Request $request)
    {
        // echo "shilpi";
        // echo "<pre>";
        // print_r($request->all());
        $data=Student::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->dob=$request->dob;
        $data->password=$request->password;
        $data->mobile=$request->mobile;
        $data->save();

        if($data)
        {
            return redirect('portal/print/'.$data->id);
        }

    }

    public function logout(Request $request)
    {
        $request->session()->forget('potal_session');
        return redirect(url('portal/login'));

    }


   
}
