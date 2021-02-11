<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portal;
use Session;

class PortalController extends Controller
{
   public function signup(){
   	return view('portal.signup');
   }


   public function login(){
   	return view('portal.login');
   }
   public function portalsignup(Request $request){
        
        $data = new Portal;
         $data->name= $request->name; 
         $data->email = $request->email;
         $data->mobile = $request->mobile;
        
         $data->password = $request->password; 
           //table(title) from(title)
           $data->save();
         //dd($data);

         if($data){
            return redirect('portal/login')->with('message','Post successfully Added');  //flash message session
         }
     }

     public function savelogin( Request $request){
     	//print_r($request->all());
     $portal =Portal::where('email',$request->email)->where('password',$request->password)->get()->toArray();
     // print_r($portal);
     if($portal){
      if($portal[0]['status']==1){

        $request->Session()->put('portal_session',$portal[0]['id']);
        return redirect('portal/dashboard');
      }
      else{
       return redirect('portal/login');
      }



     }
     else{
      return redirect('portal/login');
     }

    
  }
      


}
