<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\GuideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;


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
    return view('auth.login');
})->name('home');


//referencia rutas con roles
//Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//    Route::middleware('role:teacher|student|employed')->group(function(){
//        Route::resource('instructor', InstructorController::class);
//    });
//});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware('role:teacher|student')->group(function(){
    Route::resource('instructor', InstructorController::class);
    Route::resource('guias', GuideController::class);
    Route::resource('fichas', FichaController::class);
    Route::resource('apprentices', ApprenticeController::class);
});
});




