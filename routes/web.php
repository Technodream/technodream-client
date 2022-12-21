<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::match(['get'], 'login', function(){ return redirect('/'); })->name('login');
Route::get('/', function () {
    return view('index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
