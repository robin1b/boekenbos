<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/hallo', function () {
    return 'Welkom in '.config('app.name').'!';
});

Route::view('/over', 'over')->name('over');

Route::get('/boeken', function () {
    return 'Alle boeken';
});

Route::get('/boeken/{id}', function (int $id) {
    return 'Boek nummer '.$id;
})->whereNumber('id');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
