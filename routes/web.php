<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');
Route::post('/', [ContactController::class, 'ContactForm'])->name('contact');
Route::get('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/adduser',[UserController::class,'usersign'])->name('adduser');
