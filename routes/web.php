<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewControllers\ViewHomeController;
use App\Http\Controllers\ViewControllers\ViewChildishController;
use App\Http\Controllers\ViewControllers\ViewRegisterController;
use App\Http\Controllers\StoreChildrenController;
use App\Http\Controllers\ViewControllers\ViewUpdateController;
use App\Http\Controllers\UpdateChildrenController;
use App\Http\Controllers\DeleteChildrenController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', ViewHomeController::class);

Route::get('childish', ViewChildishController::class);

Route::get('register', ViewRegisterController::class);
Route::post('store', StoreChildrenController::class);

Route::get('viewupdate/{childId}', ViewUpdateController::class);
Route::put('update/{childId}', UpdateChildrenController::class);

Route::delete('delete/{childId}', DeleteChildrenController::class);
