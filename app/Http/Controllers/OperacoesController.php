<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperacoesController extends Controller
{
   

    public function adiciona_alunos(Request $request)
    {
    $request;

        $query = DB::table('students')->insert([
            'name'=>$request->input('nomealuno'),
            'cpf'=>$request->input('cpf_aluno'),
            'created_by' => "Lucas",
            'created_in' =>   date("m.d.y"),
            'email'=>$request->input('emailaluno')

        ]);
        if($query){
            return back()->with('Sucesso', 'Os dados foram inseridos com sucesso!!');
        }else{
            return back()->with('Falha', 'Tente novamente');
        }
        
     
    }
}
