<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminSearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserSearchController;

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth','user-access:1']], function(){
    Route::get('/dashboard', [AdminController::class, 'adminHome'])->name('admin.dashboard');
    Route::get('/pending', [AdminController::class, 'index'])->name('admin.pending');
    Route::get('/view/{id}', [AdminController::class, 'view'])->name('admin.view');
    Route::post('/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');
    Route::get('/search/applications', [AdminSearchController::class, 'searchApplications'])->name('search.applications');
});


Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user-access:2']], function (){
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/create', [UserController::class, 'create'])->name('user.dashboard.create');
    Route::post('/dashboard/store', [UserController::class, 'store'])->name('user.dashboard.store');
    Route::get('/dashboard/edit/{id}', [UserController::class, 'edit'])->name('user.dashboard.edit');
    Route::post('/dashboard/update/{id}', [UserController::class, 'update'])->name('user.dashboard.update');
    Route::get('/dashboard/destroy/{id}', [UserController::class, 'destroy'])->name('user.dashboard.destroy');
    Route::get('/dashboard/drafts/{id}', [UserController::class, 'showDrafts'])->name('user.dashboard.drafts');

    Route::get('/dashboard/search', [UserSearchController::class, 'index'])->name('user.dashboard.search');
});


Auth::routes();
// Admin Routes
// Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');



