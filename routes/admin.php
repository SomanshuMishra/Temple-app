<?php

use Illuminate\Support\Facades\Route;

Route::get('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'index'])->name('admin.login.get');
Route::post('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'login'])->name('admin.login.post');

Route::get('dashboard', [App\Http\Controllers\admin\AdminDashboardController::class,'index'])->name('admin.dashboard.get');
