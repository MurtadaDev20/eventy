<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('events.master');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/events', function () {
    return view('events.master');
});
