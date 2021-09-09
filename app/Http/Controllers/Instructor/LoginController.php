<?php

namespace App\Http\Controllers\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
   // function __construct(){
   //    $this->middleware( 'auth')->except('WelcomePage');
   // }

   public function WelcomePage(){
    return view('instructor.instructorhome');
   }

   public function ViewStudents(){
      return view('instructor.viewstudents');
     }
}
