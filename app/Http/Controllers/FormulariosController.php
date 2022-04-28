<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
   

    public function adicionaalunosmodel(Request $request)
    {

     $dados = [
        'nome' =>$request->input('nomealuno'),
        'login' =>$request->input('usuarioaluno'),
        'email' =>$request->input('emailaluno'),
        'senha' =>$request->input('passwordaluno')
     ];
       
     return view('formaddaluno', $dados);
    }
}
