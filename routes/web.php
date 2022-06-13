<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacoesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/login', [LoginController::class, 'login']);
Route::get('/', [ViewsController::class, 'principal']);

Route::group(['middleware' => ['auth']], function () { 
Route::get('/app/courses/add_courses', [ViewsController::class, 'ViewAddCourse']);
Route::get('/app/courses/remove_courses', [ViewsController::class, 'ViewRemoveCourses']);


Route::get('/app/students/add_students', [ViewsController::class, 'ViewAddStudent']);
Route::get('/app/students/remove_students', [ViewsController::class, 'ViewRemoveStudents']);

Route::get('/app/teachers/add_teachers', [ViewsController::class, 'ViewAddTeachers']);
Route::get('/app/teachers/remove_teachers', [ViewsController::class, 'ViewRemoveTeachers']);



Route::post('/app/students/add', [OperacoesController::class, 'AddStudents']);
Route::post('/app/students/remove', [OperacoesController::class, 'RemoveStudents']);
Route::post('/app/students/edit', [OperacoesController::class, 'edita_alunos']);


Route::post('/app/courses/add', [OperacoesController::class, 'AddCourses']);
Route::post('/app/courses/remove', [OperacoesController::class, 'RemoveCourses']);
Route::post('/app/courses/edit', [OperacoesController::class, 'edita_cursos']);

Route::post('/app/teachers/add', [OperacoesController::class, 'AddTeacher']);
Route::post('/app/teachers/remove', [OperacoesController::class, 'RemoveTeacher']);
Route::post('/app/teachers/edit', [OperacoesController::class, 'ModifyTeacher']);
});