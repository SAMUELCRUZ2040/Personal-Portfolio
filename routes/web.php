<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ValidateController;

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

Route::get('/home', function () {
    return view('personal');
})->name('home');

// llamar al controlador 
Route::get('/contact/create',[ContactController::class, 'create'])->name('post.create');
Route::post('/contact', [ContactController::class, 'store'])->name('post.store');

//validate
Route::get('/validate',[ValidateController::class, 'store'])->name('validate');
