<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Exammaster;
use App\Student;
use App\Portal;
use App\Exam_ques_master;
use Auth;

class AdminController extends Controller
{  

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {     
    	 
    	//echo "ayush";
    	return view ('admin.index');
    	
    }
     public function category()
    { 
        $datas=Category::orderBY('id','DESC')->get();
    	return view('category.category',compact('datas'));
    }


    public function datacategory(Request $request){

        $this->validate($request,[   
       "name"=>"required"
        //rules
       ]);

         
         $data = new Category;
         $data->name = $request->name; 
         $data->status = $request->status=1;    //table(title) from(title)
         //where image is a database name
         $data->save();
         //dd($data);

         if($data){
            return redirect('/category')->with('message','Post successfully Added');  //flash message session
         }
     }




   

  public function editcategory($id)
   {     //echo $id;

       $data=Category::find($id);
        
        //print_r($data);
        //die();

       return view('category.editcategory',compact('data'));
   } 

   public function updatecategory(Request $request)
    {
      
          
        $data =Category::find($request->id);
        $data->name=$request->name;
        
        $data->status =$request->status=1;

       


        $updated=$data->save();
        if($updated){
         return redirect('/category')->with('message','data Successfully Updated!'); 
         }
    

    }

     

   
      public function deletecategory($id){
        $Curd =Category::find($id);
        $deleted =$Curd->delete();
        if($deleted){

            return redirect('/category')->with('message','Post Successfully Deleted');
        }
    }


    //MANGE   
          public function manageexam()
    { 
        $datas=Category::orderBY('id','DESC')->get();

        $d=Exammaster::orderBY('id','DESC')->get();
        return view('admin.manageexam',compact('datas','d'));
    }

    public function datamanageexam(Request $request){
        $this->validate($request,[   
       "title"=>"required",
        "category"=>"required",
         "examdate"=>"required"

        //rules
       ]);
        $data = new Exammaster;
         $data->title= $request->title; 
         $data->category = $request->category;
         $data->status = $request->status=1;
         $data->examdate = $request->examdate;  
           //table(title) from(title)
         //where image is a database name
         $data->save();
         //dd($data);

         if($data){
            return redirect('/manageexam')->with('message','Post successfully Added');  //flash message session
         }
     }

  public function editmanageexam($id)
   {     //echo $id;

       $c=Exammaster::find($id);
        
        //print_r($data);
        //die();

       return view('admin.editmangeexam',compact('c'));
   } 
 public function updatemangeexam(Request $request)
    {
      
          
        $data =Exammaster::find($request->id);
        $data->title= $request->title; 
        $updated=$data->save();
        if($updated){
         return redirect('/manageexam')->with('message','data Successfully Updated!'); 
         }
    

    }

     



      public function deletemanageexam($id){
        $Curd =Exammaster::find($id);
        $deleted =$Curd->delete();
        if($deleted){

            return redirect('/manageexam')->with('message','Post Successfully Deleted');
        }
    }

   //student
     public function student()
    {  $data=Exammaster::orderBY('id','DESC')->get();
        $c=Student::orderBY('id','DESC')->get();
        return view('admin.student',compact('c','data'));
    }


     public function datastudent(Request $request){
        $this->validate($request,[   
       
        "email"=>"email",
         
         "examdate"=>"examdate",
         

        //rules
       ]);
        $data = new Student;
         $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
         $data->exam = $request->exam; 
         $data->status = $request->status=1;
           $data->dob = $request->dob;
         $data->password = $request->password; 
           //table(title) from(title)
         //where image is a database name
         $data->save();
         //dd($data);

         if($data){
            return redirect('/student')->with('message','Post successfully Added');  //flash message session
         }
     }

     public function editstudent($id)
   {     //echo $id;

       $data=Student::find($id);
        
        //print_r($data);
        //die();

       return view('admin.editstudent',compact('data'));
   } 

   public function updatestudent(Request $request)
    {
      
          
        $data =Student::find($request->id);
        $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
          $data->dob = $request->dob;
         
         $data->password = $request->password; 
         $updated=$data->save();
        if($updated){
         return redirect('/student')->with('message','data Successfully Updated!'); 
         }
    

    }



      public function deletestudent($id){
        $Curd =Student::find($id);
        $deleted =$Curd->delete();
        if($deleted){

            return redirect('/student')->with('message','Post Successfully Deleted');
        }
    }



      //portal

      public function portal()
    {     
       
        $datas=Portal::orderBY('id','DESC')->get();
        return view('admin.portal',compact('datas'));
    }

    public function dataportal(Request $request){
        $this->validate($request,[   
       
        "email"=>"email",
         
         "examdate"=>"examdate",
         

        //rules
       ]);
        $data = new Portal;
         $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
        
         $data->password = $request->password; 
           //table(title) from(title)
         //where image is a database name
         $data->save();
         //dd($data);

         if($data){
            return redirect('/portal')->with('message','Post successfully Added');  //flash message session
         }
     }


     public function editportal($id)
   {     //echo $id;

       $data=Portal::find($id);
        
        //print_r($data);
        //die();

       return view('admin.editportal',compact('data'));
   } 


   public function updateportal(Request $request)
    {
      
          
        $data =Portal::find($request->id);
        $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
         
         $data->password = $request->password; 
         $updated=$data->save();
        if($updated){
         return redirect('/portal')->with('message','data Successfully Updated!'); 
         }
    

    }


      public function deleteportal($id){
        $Curd =Portal::find($id);
        $deleted =$Curd->delete();
        if($deleted){

            return redirect('/portal')->with('message','Post Successfully Deleted');
        }
    }


    //add questions
    public function addquestion($id)
          {
            $exam=Exammaster::find($id);
            $data=Exam_ques_master::where('exam_id',$id)->get();
            return view('exammaster.addquestion',compact('data','exam'));
            }

            public function savequestion(Request $request)
           {

       $this->validate($request,[   
       "question"=>"required", //rules
       "answer"=>"required",
       "option1"=>"required",
       "option2"=>"required",
       "option3"=>"required",
       "option4"=>"required",
       
      

        ]);
       //print_r($request->all());
        $data = new Exam_ques_master; 
        $data->exam_id=$request->id;
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->option= json_encode(array('option1'=>$request->option1,'option2'=>$request->option2,'option3'=>$request->option3,'option4'=>$request->option4,));
        $data->status=1;
        $data->save();
        // echo "<pre>";
        // print_r($data);

        if($data)
        {
            return redirect('/addquestion/'.$request->id);

        }
        }

        public function editaddquestion($id)
   {     //echo $id;

       $data=Exam_ques_master::find($id);
        
        //print_r($data);
        //die();

       return view('exammaster.editaddquestion',compact('data'));
   } 
    public function updatequestion(Request $request)
    {
        //print_r($request->all());
        $data=Exam_ques_master::find($request->id);
        $data->question=$request->question;
        $data->option=json_encode(array('option1'=>$request->option1,'option2'=>$request->option2,'option3'=>$request->option3,'option4'=>$request->option4,));
        $data->answer=$request->answer;
        $data->save();

        if($data)
        {
             return redirect('/manageexam');
         }
   }




        public function deletequestion($id){
        $Curd =Exam_ques_master::find($id);
        $deleted =$Curd->delete();
        if($deleted){
                  return redirect('manageexam');
        }
    }


            




}

    

