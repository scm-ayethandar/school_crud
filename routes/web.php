<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index1'])->name('student');
Route::get('/create', [StudentController::class, 'index2'])->name('student.create');
Route::post('/create', [StudentController::class, 'store']);

Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/update/{id}', [StudentController::class, 'update']);

Route::delete('/student{student}', [StudentController::class, 'destroy'])->name('student.destroy');