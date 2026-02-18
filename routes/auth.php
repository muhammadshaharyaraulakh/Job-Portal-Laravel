<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\SocialController;              
Route::get('signup', function () {
    return view('authentication.signup');
})->name('signup.form');
Route::post('signup', [Authentication::class, 'registration'])->name('signup.submit'); 
Route::get('login/google', [SocialController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [SocialController::class, 'handleGoogleCallback']);

Route::get('/login/github', [SocialController::class, 'redirectToGithub']);
Route::get('/login/github/callback', [SocialController::class, 'handleGithubCallback']);


Route::get('login', function () {
    return view('authentication.login');
})->name('login.form');
Route::post('login',[Authentication::class,'login'])->name('login.submit');

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');



Route::get('login/google', [SocialController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [SocialController::class, 'handleGoogleCallback']);

