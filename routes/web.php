<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index']);
Route::get('/students/addstudent',[StudentController::class,'create']);
Route::post('/students/store',[StudentController::class,'store']);
Route::get('/students/show/{id}',[StudentController::class,'show']);
Route::get('/students/edit/{id}',[StudentController::class,'edit']);
Route::post('/students/update/{id}',[StudentController::class,'update']);
Route::get('/students/destroy/{id}',[StudentController::class,'destroy']);

