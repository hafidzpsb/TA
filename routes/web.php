<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PeoController;

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

//Route::get('excel', [App\Http\Controllers\RawController::class, 'index']); // tampilkan halaman view raw
//Route::post('excel/import', [App\Http\Controllers\RawController::class, 'import']); // import excel ke database
//Route::get('question', [App\Http\Controllers\QuestionController::class, 'store']); // membuat tabel question di database
//Route::get('student', [App\Http\Controllers\StudentController::class, 'store']); // membuat tabel student di database
//Route::get('subject', [App\Http\Controllers\SubjectController::class, 'store']); // membuat tabel subject di database
//Route::get('grade', [App\Http\Controllers\GradeController::class, 'store']); // membuat tabel grade di database

Route::get('/kurikulum/index', [KurikulumController::class, 'index'])->name('kurikulum_index');
Route::get('/kurikulum/create', [KurikulumController::class, 'create'])->name('kurikulum_create');
Route::post('/kurikulum/store', [KurikulumController::class, 'store'])->name('kurikulum_store');
Route::get('/kurikulum/edit/{id_kurikulum}', [KurikulumController::class, 'edit'])->name('kurikulum_edit');
Route::post('/kurikulum/update/{id_kurikulum}', [KurikulumController::class, 'update'])->name('kurikulum_update');
Route::get('/kurikulum/destroy/{id_kurikulum}', [KurikulumController::class, 'destroy'])->name('kurikulum_destroy');

Route::get('/peo/index', [PeoController::class, 'index'])->name('peo_index');
Route::get('/peo/create', [PeoController::class, 'create'])->name('peo_create');
Route::post('/peo/store', [PeoController::class, 'store'])->name('peo_store');
Route::get('/peo/edit/{id_peo}', [PeoController::class, 'edit'])->name('peo_edit');
Route::post('/peo/update/{id_peo}', [PeoController::class, 'update'])->name('peo_update');
Route::get('/peo/destroy/{id_peo}', [PeoController::class, 'destroy'])->name('peo_destroy');