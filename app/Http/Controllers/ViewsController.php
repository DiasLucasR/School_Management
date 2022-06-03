<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
       public function principal()
    {   
        return view('principal');
    }

    public function ViewAddCourse()
    {
        return view('courses/addcourse');
       
    }

    public function ViewAddStudent()
    {

        
        return view('students/addstudent');
    }
}
