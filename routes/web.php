<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('/training-category',[WebsiteController::class,'trainingCategory'])->name('training-category');
Route::get('/all-training',[WebsiteController::class,'allTraining'])->name('all-training');
Route::get('/login-registration',[WebsiteController::class,'auth'])->name('login-registration');


