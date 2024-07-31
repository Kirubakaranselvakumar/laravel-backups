<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\PostController;

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






// Route::prefix('gallery')->middleware('')-> group(function(){
//     Route::get('/photos', function () {
//         return '<h3> Photos Page </h3>';
//     });

//     Route::get('/videos', function () {
//         return '<h3> Videos Page </h3>';
//     });

//     Route::get('/documents', function () {
//         return '<h3> Document Page </h3>';
//     });


// Route::get('month/{num}',function($num)
// {
//     if ($num==1){
//         return 'JANUARY';
//     }else if($num==2){
//         return 'FEBRUARY';
//     }else if($num==3){
//         return 'MARCH';
//     }
// })->middleware(['month.zero','month']);

// Route::get('login', [LoginController::class,'login_form']);

// Route::post('login', [LoginController::class,'login_process']);

// Route::get('forget-password', [LoginController::class,'forget_password']);

// Route::get('post/{id}', [PostController::class,'show']);

// Route::get('month/{num}', [MonthController::class,'numToMonth']);



Route::get('/',[CrudController::class, 'index'])->name('index');
Route::delete('delete/{id}', [CrudController::class, 'destroy']);
Route::get('add', [CrudController::class, 'create']);
Route::post('add', [CrudController::class, 'store']);
Route::get('edit/{id}', [CrudController::class, 'edit']);
Route::put('update/{id}', [CrudController::class, 'update']);
