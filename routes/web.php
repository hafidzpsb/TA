<?php

use Illuminate\Support\Facades\Route;

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

Route::get('excel', [App\Http\Controllers\RawController::class, 'index']); // tampilkan halaman view raw
Route::post('excel/import', [App\Http\Controllers\RawController::class, 'import']); // import excel ke database
Route::get('question', [App\Http\Controllers\QuestionController::class, 'store']); // membuat tabel question di database
Route::get('student', [App\Http\Controllers\StudentController::class, 'store']); // membuat tabel student di database
Route::get('subject', [App\Http\Controllers\SubjectController::class, 'store']); // membuat tabel subject di database
Route::get('grade', [App\Http\Controllers\GradeController::class, 'store']); // membuat tabel grade di database