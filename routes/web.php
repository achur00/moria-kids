<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamDetailsController;
use App\Http\Controllers\OurPeopleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('services',[ServiceController::class, 'index']);
Route::get('service/{id}',[ServiceController::class, 'show'])->name('service.show');
Route::get('about',[AboutController::class, 'index']);
Route::get('contact',[ContactController::class, 'index']);
Route::post('message',[ContactController::class, 'store']);
// environment check route
// Route::get('/env-check', function() {
//     return [
//         'APP_ENV' => config('app.env'),
//         'APP_DEBUG' => config('app.debug')
//     ];
// });
