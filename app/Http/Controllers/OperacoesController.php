<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperacoesController extends Controller
{


    public function AddStudents(Request $request)
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

    public function RemoveStudents(Request $request)
    {
        if (DB::table('students')->where('cpf', $request->input('cpf'))->exists()) {

            $deleted = DB::table('students')->where('cpf', $request->input('cpf'))->delete();

            return back()->with('Eliminado', 'Os dados foram eliminados com sucesso!!');
        }

        if (DB::table('students')->where('cpf', $request->input('cpf'))->doesntExist()) {

            return back()->with('Falha', 'Esse aluno não existe!');
        }
    }

    public function edita_alunos(Request $request)
    {

    }



    public function AddCourses(Request $request)
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

    public function RemoveCourses(Request $request)
    {

        if (DB::table('courses')->where('course_name', $request->input('coursename'))->exists()) {

            $deleted = DB::table('courses')->where('course_name', $request->input('coursename'))->delete();

            return back()->with('Eliminado', 'Os dados foram eliminados com sucesso!');
        }

        if (DB::table('courses')->where('course_name', $request->input('coursename'))->doesntExist()) {

            return back()->with('Falha', 'Esse curso não existe!');
        }
    }

    public function edita_cursos(Request $request)
    {

    }

    public function AddTeacher(Request $request)
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

    public function RemoveTeacher(Request $request)
    {
        if (DB::table('courses')->where('course_name', $request->input('nomecurso'))->exists()) {

            $deleted = DB::table('courses')->where('course_name', $request->input('nomecurso'))->delete();

            return back()->with('Eliminado', 'Os dados foram eliminados com sucesso!');
        }

        if (DB::table('courses')->where('course_name', $request->input('nomecurso'))->doesntExist()) {

            return back()->with('Falha', 'Esse curso não existe!');
        }
    }

    public function ModifyTeacher(Request $request)
    {

    }

}
