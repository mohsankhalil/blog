<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');

Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/student',[StudentController::class,'index'])->name('student');
Route::post('/student',[StudentController::class,'store'])->name('student-form');
Route::get('/student',[StudentController::class,'show'])->name('student');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/update_student/{id}',[StudentController::class,'update'])->name('update_student');
Route::delete('/student/{id}',[StudentController::class,'destroy'])->name('destroy');



