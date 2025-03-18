<?php

use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return view('events.master');
    });
    
    
});

Route::get('/events', function () {
    return view('events.master');
})->name('events');
Route::get('/event/{id}', function () {
    return view('events.main.show-single-event', [
        'id' => request()->route('id')
    ]);
})->name('event');

Route::get('/all-events', function () {
    return view('events.main.show-all-events');
})->name('allevent');

