<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, "index"])->name("home");
Route::get('/rooms',[HomeController::class, "load_rooms"])->name("rooms");
Route::get('/book', [BookingController::class, 'load_book'])->name('book');

