<?php

use Illuminate\Support\Facades\Route;


// AdminDashboardController

Route::get('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'index'])->name('admin.login.get');
Route::post('admin-login', [App\Http\Controllers\admin\AdminLoginController::class,'login'])->name('admin.login.post');
Route::get('/manage-prasad',[App\Http\Controllers\admin\AdminDashboardController::class,'prasad'])->name('admin.prasad');
Route::get('/event-type',[App\Http\Controllers\admin\AdminDashboardController::class,'eventType'])->name('admin.event.type');
Route::get('/manage-event',[App\Http\Controllers\admin\AdminDashboardController::class,'event'])->name('admin.event');


// AdminUserController

Route::get('/add-user',[App\Http\Controllers\admin\AdminUserController::class,'addUser'])->name('admin.addUser');
Route::get('/manage-user',[App\Http\Controllers\admin\AdminUserController::class,'manageUsersView'])->name('admin.manageUser');
Route::post('/add-user',[App\Http\Controllers\admin\AdminUserController::class,'addUserData'])->name('admin.addUser');


Route::get('/yajra',[App\Http\Controllers\admin\AdminUserController::class,'yajra']);




// Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function(){
//     Route::get('/dashboard',[App\Http\Controllers\admin\AdminDashboardController::class,'index'])->name('admin.dashboard');
//     // Route::group(['prefix' => 'database','middleware' => ['auth:admin']],function(){
//     //     Route::get('/country/add',[App\Http\Controllers\Admin\Database\CountryController::class, 'index']  )->name('admin.country.add');
//     //     Route::Post('/country/add',[App\Http\Controllers\Admin\Database\CountryController::class, 'add']  )->name('admin.country.add.data');
//     //     Route::get('/country/list',[App\Http\Controllers\Admin\Database\CountryController::class, 'list']  )->name('admin.country.list');
//     // });
// });