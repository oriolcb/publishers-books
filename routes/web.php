<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;

Route::resource('publishers', PublisherController::class);
Route::resource('books', BookController::class);

Route::get('/', function () {
    return redirect()->route('publishers.index');
});
