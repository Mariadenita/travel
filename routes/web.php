<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\travelPackageController;

Route::get('/',[homeController::class,'index'])->name('home');
Route::get('/travelPackage',[travelPackageController::class,'travelPackage'])->name('travelPackage');