<?php

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

// Route::resource('/plants', App\Http\Controllers\PlantController::class);

Route::get('/', [\App\Http\Controllers\PlantController::class, 'index']);

// navigate to show page
// Route::get('/show/{id}', function () { return view('show'); });
Route::get('/show/{plant}', 'App\Http\Controllers\PlantController@show');
