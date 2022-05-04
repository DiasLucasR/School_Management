<?php

namespace App\Http\Controllers;

use App\Models\Courses;
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

    public function exclui_alunos(Request $request)
    {
    }

    public function edita_alunos(Request $request)
    {
    }



    public function adiciona_cursos(Request $request)
    {
 
        $novo_curso = Courses::create(
            [
                'course_name'=>$request->input('nomecurso'),
                'course_type'=>$request->input('tipocurso'),
                'course_area'=>$request->input('areacurso'),
                'created_by' => "Lucas",
            ]
        );
        return(dd($request->all()));
     
    }

    public function exclui_cursos(Request $request)
    {
    }

    public function edita_cursos(Request $request)
    {
    }
    
}
