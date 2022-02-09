<?php

use App\Http\Controllers\emails\EmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

// EMAILS
Route::post('emailCitas', [EmailController::class, 'citas'])->name('emailCitas');

//404
Route::fallback( function () {
    return response(view('status.404'),404);
}) ;