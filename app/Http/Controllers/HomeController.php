<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $st = [
          ['st_id'=> 1,'st_name'=>'Hamza','st_course'=>"Java"],
          ['st_id'=> 2,'st_name'=>'Hamza','st_course'=>"Java"],
          ['st_id'=> 3,'st_name'=>'Hamza','st_course'=>"Java"],
          ['st_id'=> 4,'st_name'=>'Hamza','st_course'=>"Java"],

        ];

        return view('user_data',['student'=>$st]);
    }


    public function formData(Request $request){
  
      $request->validate(
          [       
                  'email'=> 'required|email',         
                  'password'=> 'required'         
          ]
      ); 

        echo "Your Email : ". $request->email;
        echo "<br>";
        echo "Your Password : ". $request->password;
    }
}
