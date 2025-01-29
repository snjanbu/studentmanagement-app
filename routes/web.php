<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;

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



Route::resource('/students', StudentController::class)->name('*', 'students');
Route::resource('/teachers', TeacherController::class)->name('*', 'teachers');
Route::resource('/courses', CourseController::class)->name('*', 'courses');
Route::resource('/batches', BatchController::class)->name('*', 'batches');
Route::resource('/enrollments', EnrollmentController::class)->name('*', 'enrollments');
Route::resource('/payments', PaymentController::class)->name('*', 'payments');

Route::get('/', function () {
    return redirect('/students');
});
