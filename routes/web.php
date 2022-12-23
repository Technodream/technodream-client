<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::match(['get'], 'login', function(){ return redirect('/'); })->name('login');
Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/yelp-business-list', [App\Http\Controllers\HomeController::class, 'yelp_page'])->name('yelp');
Route::get('/local-business', [App\Http\Controllers\HomeController::class, 'local_business_page'])->name('local.business');
Route::get('/glassdoor', [App\Http\Controllers\HomeController::class, 'glassdoor_page'])->name('glassdoor');
