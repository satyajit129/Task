<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;

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

Route::group(['prefix' => 'admin',  'middleware' => ['auth','user-access:1']], function(){
    Route::get('/dashboard', [AdminController::class, 'adminHome'])->name('admin.dashboard');
    Route::get('/pending', [AdminController::class, 'index'])->name('admin.pending');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user-access:2']], function (){
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/create', [UserController::class, 'create'])->name('user.dashboard.create');
});

Auth::routes();
// Admin Routes
// Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');



