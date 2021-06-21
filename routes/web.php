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

use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/create', [UserController::class, 'create']);
Route::post('/user/update', [UserController::class, 'update']);
Route::get('/user/{student_number}', [UserController::class, 'read']);
Route::get('/user/delete/{student_number}', [UserController::class, 'delete']);

Route::get('/college/list', [CollegeController::class, 'list']);
Route::get('/college/detail/{college_code}', [CollegeController::class, 'detail']);
Route::get('/college/courses/{college_code}', [CollegeController::class, 'courses']);

Route::get('/course/list', [CourseController::class, 'list']);
Route::get('/course/detail/{course_code}', [CourseController::class, 'detail']);

Route::get('/subject/list', [SubjectController::class, 'list']);
Route::get('/subject/detail/{subject_code}', [SubjectController::class, 'detail']);

Route::get('/enrollment/list', [EnrollmentController::class, 'list']);
Route::post('/enrollment/create/', [EnrollmentController::class, 'create']);
Route::post('/enrollment/update', [EnrollmentController::class, 'update']);
Route::get('/enrollment/detail/{control_number}', [EnrollmentController::class, 'detail']);
Route::get('/enrollment/subjects/{control_number}', [EnrollmentController::class, 'subjects']);

/*
Choosing of Course
Display of Username and Password
Login
Enrollment Process Tab
Viewing of Schedule
Viewing of Assessment
Admission Confirmation?
Viewing of Reg Form
Viewing of Information
Changing of password
*/