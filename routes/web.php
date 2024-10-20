<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
auth::routes();

use App\Http\Controllers\CDFBursaryController;
Route::get('/cdf-bursary',[CDFBursaryController::class, 'index'])->name('cdf-bursary');
Route::post('/cdf-bursary',[CDFBursaryController::class,'store'])->name('cdf-bursary.store');

use App\Http\Controllers\OthersController;
Route::get('/others',[OthersController::class, 'index'])->name('others');

use App\Http\Controllers\NotifyController;
Route::get('/notify',[NotifyController::class,'index'])->name('notify');
Route::post('/notify',[NotifyController::class,'store'])->name('notify.store');



