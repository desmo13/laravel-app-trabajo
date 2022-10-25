<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
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

Route::get('/', function () {
    return view('welcome');
})->name('prueba');
Route::get('/Tarea', function () {
    return view('Tareas.index');
});
Route::get('/Tarea', [TareasController::Class,'index'] );
Route::post('/Tarea', [TareasController::Class,'store'] )->name('tareaPost');
Route::patch('/Tarea', [TareasController::Class,'index'] )->name('tareas-edit');
Route::delete('/Tarea', [TareasController::Class,'index'] )->name('tareas-destroy');