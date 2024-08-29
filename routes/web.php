<?php
/*
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\Homecontroller;
Route::get('/',[Homecontroller::class, 'index']);

use App\Http\Controllers\CDFBursaryController;
Route::get('/cdf-bursary',[CDFBursaryController::class, 'index'])->name('cdf-bursary');
Route::post('/cdf-bursary',[CDFBursaryController::class,'store'])->name('cdf-bursary.store');

use App\Http\Controllers\OthersController;
Route::get('/others',[OthersController::class, 'index'])->name('others');

use App\Http\Controllers\NotifyController;
Route::get('/notify',[NotifyController::class,'index'])->name('notify');
Route::post('/notify',[NotifyController::class,'store'])->name('notify.store');

use App\Http\Controllers\RegistrationController;
Route::get('/register',[RegistrationController::class,'showRegistrationForm'])->name('register');
Route::post('/register',[RegistrationController::class,'register']);
