<?php

use App\Http\Controllers\HeadController;
use App\Http\Controllers\UserController;
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


Route::get('/head', [HeadController::class, 'index']);
Route::get('/', [HeadController::class, 'home']);
Route::get('/adduser', [UserController::class, 'create'])->name('rakib');
Route::post('/storeuser', [UserController::class, 'store'])->name('add');
Route::get('/viewuser', [UserController::class, 'show'])->name('show');
