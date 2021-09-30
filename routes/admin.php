<?php

use Illuminate\Support\Facades\Route;



Route::get('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'index'])->name('admin.login.get');
Route::post('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'login'])->name('admin.login.post');


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function(){
    Route::get('/dashboard',[App\Http\Controllers\admin\AdminDashboardController::class,'index'])->name('admin.dashboard');
    // Route::group(['prefix' => 'database','middleware' => ['auth:admin']],function(){
    //     Route::get('/country/add',[App\Http\Controllers\Admin\Database\CountryController::class, 'index']  )->name('admin.country.add');
    //     Route::Post('/country/add',[App\Http\Controllers\Admin\Database\CountryController::class, 'add']  )->name('admin.country.add.data');
    //     Route::get('/country/list',[App\Http\Controllers\Admin\Database\CountryController::class, 'list']  )->name('admin.country.list');
    // });
});