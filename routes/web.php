<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulariosController;
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





Route::get('/', [ViewsController::class, 'principal']);
Route::get('/formulario_add_curso', [ViewsController::class, 'adiciona_cursos']);
Route::get('/formulario_add_aluno', [ViewsController::class, 'adiciona_alunos']);
Route::get('/login', [LoginController::class, 'login']);

Route::post('/adicionaalunos', [FormulariosController::class, 'adicionaalunosmodel']);
