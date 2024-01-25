<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SemesterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [PageController::class, 'getIndexPage']);
Route::get('/login', [UserController::class, 'getLoginPage'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/semester', [SemesterController::class, 'getSemesterPage']);
Route::get('/semester/add', [SemesterController::class, 'getAddSemesterPage']);
Route::post('/semester/add', [SemesterController::class, 'addSemester']);
Route::get('/semester/edit/{id}',[SemesterController::class,'getEditSemesterPage']);
Route::post('/semester/edit/{id}',[SemesterController::class,'editSemester']);
Route::post('/semester/delete/{id}',[SemesterController::class,'deleteSemester']);
