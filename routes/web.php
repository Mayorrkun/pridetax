<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/about',function(){
    return view('about');
})->name('about');
Route::get('/services',function(){
    return view('services');
})->name('services');

Route::get('/resources',function(){
    return view('resources');
})->name('resources');
