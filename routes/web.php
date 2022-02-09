<?php

use App\Http\Controllers\emails\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->middleware('throttle:15,1');

// EMAILS
Route::post('emailCitas', [EmailController::class, 'citas'])->name('emailCitas')->middleware('throttle:4,1');

//404
Route::fallback( function () {
    return response(view('status.404'),404);
})->middleware('throttle:10,1');


