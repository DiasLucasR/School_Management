<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
       public function principal()
    {   
        return view('principal');
    }

    public function adiciona_cursos()
    {
        return view('formaddcurso');
       
    }

    public function adiciona_alunos()
    {

        
        return view('formaddaluno');
    }
}
