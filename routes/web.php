<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MapelController;

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
});

Route::resource('sisw',SiswaControllers::class);
Route::resource('nilai',NilaiController::class);  
Route::resource('mapel',MapelController::class);