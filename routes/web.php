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

Route::get('/courses/add_courses', [ViewsController::class, 'ViewAddCourse']);
Route::get('/courses/remove_courses', [ViewsController::class, 'ViewRemoveCourses']);


Route::get('/students/add_students', [ViewsController::class, 'ViewAddStudent']);
Route::get('/students/remove_students', [ViewsController::class, 'ViewRemoveStudents']);

Route::get('/teachers/add_teachers', [ViewsController::class, 'ViewAddTeachers']);
Route::get('/teachers/remove_teachers', [ViewsController::class, 'ViewRemoveTeachers']);



Route::post('/students/add', [OperacoesController::class, 'AddStudents']);
Route::post('/students/remove', [OperacoesController::class, 'RemoveStudents']);
Route::post('/students/edit', [OperacoesController::class, 'edita_alunos']);


Route::post('/courses/add', [OperacoesController::class, 'AddCourses']);
Route::post('/courses/remove', [OperacoesController::class, 'RemoveCourses']);
Route::post('/courses/edit', [OperacoesController::class, 'edita_cursos']);

Route::post('/teachers/add', [OperacoesController::class, 'AddTeacher']);
Route::post('/teachers/remove', [OperacoesController::class, 'RemoveTeacher']);
Route::post('/teachers/edit', [OperacoesController::class, 'ModifyTeacher']);