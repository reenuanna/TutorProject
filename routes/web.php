<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TutorController;

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

Route::get('/',[UserController::class,'index']);
Route::get('login',[UserController::class,'login']);
Route::post('/loginfun',[UserController::class,'loginfun']);
Route::get('logout',[UserController::class,'logout']);
Route::get('register',[UserController::class,'register']);
Route::post('insertData',[UserController::class,'regFun']);
Route::get('home',[UserController::class,'home']);
Route::get('clsSubj/{id}',[UserController::class,'clsSubj']);
Route::post('selectClassSub',[UserController::class,'selectClassSub']);


// ------------------ADMIN-------------------------
Route::get('admin',[AdminController::class,'index']);
Route::get('classes',[AdminController::class,'getClass']);
Route::get('addcls',[AdminController::class,'clsForm']);
Route::post('insertClass',[AdminController::class,'insertClass']);
Route::get('subject',[AdminController::class,'getsubject']);
Route::get('addsubject',[AdminController::class,'addsubject']);
Route::post('insertSubject',[AdminController::class,'insertSubject']);

// -------------------TUTOR-----------------------------
Route::get('tutorlog',[TutorController::class,'tutorlog']);
Route::post('logintut',[TutorController::class,'logintut']);
Route::get('tutorsignup',[TutorController::class,'tutorsignup']);
Route::post('saveTutor',[TutorController::class,'saveTutor']);

