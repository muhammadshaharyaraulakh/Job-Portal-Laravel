<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('signup', function () {
    return view('authentication.signup');
});
Route::get('login', function () {
    return view('authentication.login');
});
Route::get('findJobs',function(){
    return view('user.joblisting');
});