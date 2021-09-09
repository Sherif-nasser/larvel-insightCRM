<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;


class AdminLoginController extends Controller
{
     
    public function AddAdmin(){
        // $admins = Admin::select('select * from admins where name = ?', ['habiba']);
        // $admins = Admin::all()->take(1);
        // $admins = Admin::all('name')->orderBy('adminId','desc');
        // Admin::insert(['name' => 'sherif','email' => 'ahmedtahoun@gmail.com','password'=>'01152485','phone'=>'0115575']);
        //hasOne(   )
        $name = 'ahmed';
        $newAdmin = Admin::insert(['name' => $name,'email' => 'ahmedtahoun@gmail.com','password'=>'01152485','phone'=>'0115575']);
        return $name .' is added succesfully';
    }

   
    // public function addStudent(){
    //     $newStudent = Students::insert(['name' => 'sherif','email' => 'ahmedtahoun@gmail.com','password'=>'01152485','phone'=>'0115575']);
    //     return view('admin.contact');
    // }
    public function home(){

        return view('admin.adminhome');
    }
    public function getStudent(){
        $users = User::all();
return $users[0]->{"name"};
    // $newStudent = Students::insert(['name' => 'sherif','email' => 'ahmedtahoun@gmail.com','password'=>'01152485','phone'=>'0115575']);
    // return view('student.list',$users); //array of fetched users to be displayed.
    }
    
    public function veiwStudents(){
        
        return view('student.list');
    }
    
   
}
