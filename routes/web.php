<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobApplicationController;

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

Route::get('/', [JobApplicationController::class, 'index']);
Route::get('/cv', [JobApplicationController::class, 'cv']);
Route::get('/cl', [JobApplicationController::class, 'cl']);
