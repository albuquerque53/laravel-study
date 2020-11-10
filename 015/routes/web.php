<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/{book}', [BookController::class, 'show'])->name('book.show');