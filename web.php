<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StudentInsertController;

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

Route::get('/', [StudentInsertController::class,'insert_form']);
Route::post('create',[StudentInsertController::class,'insert']);

Route::get('view-records',[StudentInsertController::class,'student_list']);



Route::get('edit/{id}', [StudentInsertController::class,'edit']);
Route::post('edit/{id}', [StudentInsertController::class, 'update']);


Route::get('delete/{id}',[StudentInsertController::class,'delete'] );

