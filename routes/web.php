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

Route::get('/cursos/adicionar_alunos', [ViewsController::class, 'ViewAddStudent']);
Route::get('/alunos/adicionar_cursos', [ViewsController::class, 'ViewAddCourse']);



Route::post('/students/add', [OperacoesController::class, 'adicionar_alunos']);
Route::post('/students/remove', [OperacoesController::class, 'excluir_alunos']);
Route::post('/students/edit', [OperacoesController::class, 'edita_alunos']);


Route::post('/courses/add', [OperacoesController::class, 'Adicionar_cursos']);
Route::post('/courses/remove', [OperacoesController::class, 'exclui_cursos']);
Route::post('/courses/edit', [OperacoesController::class, 'edita_cursos']);