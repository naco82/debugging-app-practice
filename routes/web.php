<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\LogRequest;
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

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware(LogRequest::class);
Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware(LogRequest::class);
