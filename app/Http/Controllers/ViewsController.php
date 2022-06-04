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

    public function ViewRemoveCourses()
    {
        return view('courses/removecourses');
       
    }
   
    public function ViewRemoveStudents()
    {

        
        return view('students/removestudents');
    }

    public function ViewAddStudent()
    {

        
        return view('students/addstudent');
    }

    public function ViewRemoveTeachers()
    {

        
        return view('students/removestudents');
    }

    public function ViewAddTeachers()
    {

        
        return view('students/addstudent');
    


    }
}