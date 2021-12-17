<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LoginController;

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

Route::get('userLogin', [LoginController::class, 'Login'])->name('login');
Route::post('userLogin', [LoginController::class, 'loginUser']);
Route::get('Register', [LoginController::class, 'Register']);
Route::post('Register', [LoginController::class, 'userRegister']);

Route::middleware(['middleware' => 'auth'])->group(function () {
    Route::get('home',[LoginController::class, 'home'])->name('home');
    
    #user
    Route::get('listUser', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create']);
    Route::post('create', [UserController::class, 'store']);
    Route::get('/active/update', [UserController::class,'updateStatus'])->name('users.update.active');

    #userPro
    Route::get('userPro', [UserController::class, 'userPro']);
    Route::post('search', [UserController::class, 'search'])->name('search');
});

