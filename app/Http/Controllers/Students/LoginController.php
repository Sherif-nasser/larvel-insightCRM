<?php

namespace App\Http\Controllers\Students;
use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class LoginController extends Controller
{
    public function InsertStudent(){
        $newStudent = Students::insert(['name' => 'sherif','email' => 'ahmedtahoun@gmail.com','password'=>'01152485','phone'=>'0115575']);
        return view('student.studenthome');
       }

  
       
   
}
