<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\TeacherAuthController;

Route::get('teacher/signup', [TeacherAuthController::class, 'showSignUpForm'])->name('teacher.signup');
Route::post('teacher/signup', [TeacherAuthController::class, 'signup']);

Route::get('teacher/login', [TeacherAuthController::class, 'showLoginForm'])->name('teacher.login');
Route::post('teacher/login', [TeacherAuthController::class, 'login']);


Route::resource('students', StudentController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome1', function () {
    return view('welcome1');
});


