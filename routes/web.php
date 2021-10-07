<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;



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
//Basic Routes
Route::get('/', [PagesController::class,'home'])->name('home');

Route::get('/contact/public',[PagesController::class,'contact'])->name('contact');
Route::get('/profile',[PagesController::class,'myprofile'])->name('profile');

//student routes
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create',[StudentController::class,'createSubmit'])->name('student.create');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');
Route::get('/student/edit/{id}/{name}',[StudentController::class,'edit']);
Route::post('/student/edit',[StudentController::class,'editSubmit'])->name('student.edit');
Route::get('/student/delete/{id}/{name}',[StudentController::class,'delete']);
//teacher routes
Route::get('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('/teacher/create',[TeacherController::class,'createSubmit'])->name('teacher.create');
Route::get('/teacher/list',[TeacherController::class,'list'])->name('teacher.list');

//Teacher Course
Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');

//course
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses');


//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//teacher dash
Route::get('/teacher/dash', [PagesController::class,'teacherDash'])->name('teacherDash')->middleware('ValidTeacher');
