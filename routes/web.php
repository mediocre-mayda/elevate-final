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
    return view('index');
});
<<<<<<< HEAD
Route::get('/signup',[UserController::class,'signup']);
Route::post('adduser',[UserController::class,'usersign'])->name('adduser');
=======
Route::post('/', [ContactController::class, 'ContactForm'])->name('contact');
>>>>>>> 2a94cb49253b3247d1e61b236299dcc7e7285a03
