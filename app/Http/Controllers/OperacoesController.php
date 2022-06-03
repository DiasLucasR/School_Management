<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperacoesController extends Controller
{


    public function adiciona_alunos(Request $request)
    {

        if (DB::table('students')->where('cpf', $request->input('cpf_aluno'))->exists()) {

            return back()->with('Existe', 'Esse aluno já foi inserido!');
        }
        if (DB::table('students')->where('cpf', $request->input('cpf_aluno'))->doesntExist()) {

            $novo_aluno = Students::create(
                [
                    'name' => $request->input('nomealuno'),
                    'cpf' => $request->input('cpf_aluno'),
                    'email' => $request->input('emailaluno'),
                    'created_by' => "Lucas"
                ]
            );

            if ($novo_aluno) {
                return back()->with('Sucesso', 'Os dados foram inseridos com sucesso!!');
            } else {
                return back()->with('Falha', 'Tente novamente');
            }
        }
    }

    public function exclui_alunos(Request $request)
    {
        $deleted = DB::table('students')->where('cpf', $request->input('cpf_aluno'))->delete();
        if ($deleted) {
            return back()->with('Eliminado', 'Os dados foram eliminados com sucesso!!');
        } else {
            return back()->with('Falha', 'Tente novamente');
        }
    }

    public function edita_alunos(Request $request)
    {

    }



    public function adiciona_cursos(Request $request)
    {

        if (DB::table('courses')->where('course_name', $request->input('nomecurso'))->exists()) {

            return back()->with('Existe', 'Esse curso já foi inserido!');
        }

        if (DB::table('courses')->where('course_name', $request->input('nomecurso'))->doesntExist()) {
            $novo_curso = Courses::create(
                [
                    'course_name' => $request->input('nomecurso'),
                    'course_type' => $request->input('tipocurso'),
                    'course_area' => $request->input('areacurso'),
                    'created_by' => "Lucas",
                ]
            );
            if ($novo_curso) {
                return back()->with('Sucesso', 'Os dados foram inseridos com sucesso!!');
            } else {
                return back()->with('Falha', 'Tente novamente');
            }
        }
    }

    public function exclui_cursos(Request $request)
    {
        $deleted = DB::table('courses')->where('course_name', $request->input('nomecurso'))->delete();
        if ($deleted) {
            return back()->with('Eliminado', 'Os dados foram eliminados com sucesso!');
        } else {
            return back()->with('Falha', 'Esse curso não existe!');
        }
    }

    public function edita_cursos(Request $request)
    {

    }

}
