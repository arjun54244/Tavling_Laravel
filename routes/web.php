<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::get('/registration', [AccountController::class, 'registration']);
Route::post('/registration', [AccountController::class, 'registrationForm'])->name('registrationForm.post');

Route::get('/contact', function(){
    return view('frontend.contact');
});
Route::view('/about','frontend.about');


