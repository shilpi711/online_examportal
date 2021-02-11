<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Exammaster;
use App\Student;
use App\Exam_ques_master;
use App\result;
use App\User;

class StudentOperationController extends Controller
{
     public function studentdashboard()
    {   
    	 //echo $session_data=Session::get('portal_session');
    	if(!Session::get('student_session'))
    	{
    		return redirect(url('student/login'));
    	}
    	
    	$data=Student::where('status','1')->get();
        
    	// echo"<pre>";
    	// print_r($data);
    	// exit();
    	
    	return view('student.studentdashboard',compact('data'));

    }

    public function studentexam()
    {
        $data = Student::where('id',Session::get('student_session'))->get()->first();
        $exam =Exammaster::where('id',$data->exam)->first();
        $exam_join=result::where('exam_id',$data->exam)->where('user_id',Session::get('student_session'))->get()->first();
           $examinfo = result::get()->first();
        //print_r($examinfo);

        return view('student.studentexam',compact('data','exam','exam_join','examinfo'));
    }



    public function studentjoinexam($id)
    {
        // echo $id;
        // die();
       // $data=Student::where('id',Session::get('student_session'))->get()->first();
        //$show = Exam_ques_master::where('exam_id',$id)->get();
        $exam_ques['count_question'] = Exam_ques_master::where('exam_id',$id)->count();
        $exam_ques['question'] = Exam_ques_master::where('exam_id',$id)->get()->toArray();
        $exam_ques['exam_info'] = Exammaster::where('id',$id)->get()->toArray();
        
        $create_result = new result;
        $create_result->exam_id = $id;
        $create_result->user_id = Session::get('student_session');
        $create_result->status = "started";
        $create_result->save();
        return view('student.exampaper',$exam_ques);
    }
   
    public function submit_question(Request $request)
    {
     //echo '<pre>';

       //  print_r($request->all());
        $yes_ans=0;
        $no_ans=0;

    

    $data=$request->all();
         $result=array();
         for ($i=1; $i<=$request->index; $i++) 
         { 
            //echo $i;
            if (isset($data['question'. $i])) 
            {

               $question= Exam_ques_master::where('id',$data['question'. $i])->get()->first();

                 //echo '<pre>';
                 //print_r($question);
                 //die();

               if ($question->answer==$data['answer'.$i])
                {   
                   # code...
                       $result[$data['question'.$i]]='yes';
                       $yes_ans++;
                }

                else 
               
                {
                    $result[$data['question'.$i]]='No'; 
                    $no_ans++;
                }

            }
            //echo '<pre>';
            //print_r($result);
        }
      $create_result = result::where('user_id',Session::get('student_session'))->first();
        
       $create_result->yes_ans = $yes_ans;
      
       $create_result->no_ans = $no_ans;
       $create_result->status = "completed";
       $create_result->result_json = json_encode($result);
       $create_result->save();
        

        return redirect(url('student/showresult',$create_result->id));

    }
    public function showresult($id){


         // echo $id;
        $result_info=result::where('id',$id)->get()->first();
        $student_info=Student::where('id',$result_info->user_id)->first();
      
        // echo "<pre>";
        // print_r($result_info);
        // die();
        return view('student.showresult',compact('result_info','student_info'));
    }

    public function password(){
      $data=Student::where('id',Session::get('student_session'))->get()->first();
        return view('student.password',compact('data'));

    }
    public function editpassword($id)
   {     //echo $id;

       $data=Student::find($id);
        
        //print_r($data);
        //die();

       return view('student.editpassword',compact('data'));
   } 

   public function updatepassword(Request $request)
    {
      
          
        $data =Student::find($request->id);
        $data->password=$request->password;
        
       

       


        $updated=$data->save();
        if($updated){
         return redirect('/student/password')->with('message','data Successfully Updated!'); 
         }
    

    }
    
    

              
    


    public function studentlogout(Request $request)
    {
        $request->session()->forget('student_session');
        return redirect(url('student/login'));

    }

}
