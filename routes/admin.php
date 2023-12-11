<?php
// Admin Routes

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;

Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');


/**Profile Routes */
Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::post('profile/update',[ProfileController::class,'updateProfile'])->name('profile.update');
Route::post('profile/update/password',[ProfileController::class,'updatePassword'])->name('password.update');

/** Slider Route */
Route::resource('slider',SliderController::class);

/** Category Route */
Route::resource('category',CategoryController::class);
