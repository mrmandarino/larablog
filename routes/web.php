<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mandarino\MController;

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

//          WEAS EXPERIMENTALES - NO SON CANON DEL CURSO
Route::get('/mandarino', [MController::class, 'index'])->name('mandarino');

//          WEAS DEL CURSO
Route::get('/', function () {
    return view('welcome');
});


Route::resource('dashboard/post', PostController::class);


