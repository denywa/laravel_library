<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewspaperController;
use App\Http\Controllers\CDController;
use App\Http\Controllers\FYPController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\JournalController;

Route::get('/newspapers/{sort?}', [NewspaperController::class, 'index']);
Route::get('/cds/{sort?}', [CDController::class, 'index']);
Route::get('/fyps/{sort?}', [FYPController::class, 'index']);
Route::get('/books/{sort?}', [BookController::class, 'index']);
Route::get('/journals/{sort?}', [JournalController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
