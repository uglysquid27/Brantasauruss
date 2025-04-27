<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreeningController;



Route::get('/', function () {
    return view('search'); 
});


// Route for the question page
Route::get('/screening', [ScreeningController::class, 'index']);
// Route for storing screening data
Route::post('/screening/store', [ScreeningController::class, 'store']);

use App\Http\Controllers\Auth\LoginController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return 'Welcome to the dashboard!';
})->middleware('auth');



