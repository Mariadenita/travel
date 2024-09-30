<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\travelPackageController;
use App\Http\Controllers\profileController;

Route::get('/',[homeController::class,'index'])->name('home');
Route::get('/profile',[profileController::class,'profile'])->name('profile');
Route::get('/editprofile',[profileController::class,'editprofile'])->name('editprofile');
Route::get('/travelPackage',[travelPackageController::class,'travelPackage'])->name('travelPackage');