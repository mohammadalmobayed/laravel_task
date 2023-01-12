<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/pg1', function () {
    return view('pg1');
});

Route::get('/pg2', function () {
    return view('pg2');
});

Route::get('/pg3', function () {
    return view('pg3');
});

Route::get('/pg4',[UserController::class,"showData"]);