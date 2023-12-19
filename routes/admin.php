<?php
// Admin Routes

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
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
Route::put('change-status',[CategoryController::class,'changeStatus'])->name('category.change-status'); // must create before resource route, else no work
Route::resource('category',CategoryController::class);

/** Sub Category Route */
Route::put('subcategory/change-status',[SubCategoryController::class,'changeStatus'])->name('sub-category.change-status'); // must create before resource route, else no work
Route::resource('sub-category',SubCategoryController::class);
