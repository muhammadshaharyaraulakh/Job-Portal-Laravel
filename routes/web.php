<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Jobs',function(){
    return view('user.joblisting');
})->name('jobs');
Route::get('profile',function(){
    return view('user.profile');
})->name('profile');
Route::get('applications',function(){
    return view('user.applications');
})->name('applications');
Route::get('contact',function(){
    return view('user.contact');
})->name('contact');


Route::get('postJob',function(){
    return view('Employers.postJob');
});

Route::get('apply',function(){
    return view('apply');
})->name('apply');
require __DIR__.'/auth.php';