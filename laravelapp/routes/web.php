<?php

use App\Http\Controllers\LoginInsertController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[LoginInsertController::class,'insert_form']);
Route::post('home',[LoginInsertController::class,'login']);
Route::get('signup',[LoginInsertController::class,'signup_form']);
Route::post('signup-data',[LoginInsertController::class,'signup']);
Route::post('dashboard',[LoginInsertController::class,'mainpage']);
