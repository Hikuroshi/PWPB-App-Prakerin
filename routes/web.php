<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardSiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(SiswaController::class)->group(function(){
    Route::get('/biodata', 'biodata');
    Route::get('/galeri', 'galeri');
    Route::get('/kontak', 'kontak');
});

Route::controller(DashboardSiswaController::class)->group(function(){
    Route::get('/', 'index');
});