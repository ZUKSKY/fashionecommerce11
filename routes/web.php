<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Include authentication routes
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');


// Routes for authenticated users
Route::middleware([AuthUser::class])->group(function() {
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout'); // Define the logout route
});

// Routes for authenticated admins
Route::middleware([AuthAdmin::class])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/brands', [AdminController::class, 'brands'])->name('admin.brands');
});