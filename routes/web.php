<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/hallo', function () {
    return 'Welkom in '.config('app.name').'!';
});

Route::view('/over', 'over')->name('over');

Route::controller(BookController::class)->group(function () {
    Route::get('/boeken', 'index')->name('books.index');
    Route::get('/boeken/{id}', 'show')->whereNumber('id')->name('books.show');
});

Route::redirect('/boekenlijst', '/boeken');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
