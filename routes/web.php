<?php
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

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/user/create', [UserController::class, 'create']);
Route::post('/user/update', [UserController::class, 'update']);
Route::get('/user/{student_number}', [UserController::class, 'read']);
Route::get('/user/delete/{student_number}', [UserController::class, 'delete']);



/*

Registration:
Fill-up of SPAR (information)
Choosing of Course
Display of Username and Password
Login
Update Spar
Enrollment Process Tab
Viewing of Schedule
Viewing of Assessment
Admission Confirmation?
Viewing of Reg Form
Student Information Tab
Viewing of Information
Changing of password
*/