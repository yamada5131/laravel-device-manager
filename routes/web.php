<?php

use App\Http\Controllers\RoomCommandController;
use App\Http\Controllers\RoomComputerController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('rooms', RoomController::class)
        ->only(['index', 'store', 'update', 'destroy', 'show']);

    Route::post('/rooms/{room}/computers', [RoomComputerController::class, 'store'])
        ->name('rooms.computers.store');

    Route::post('/rooms/{room}/commands', [RoomCommandController::class, 'handleCommand'])
        ->name('rooms.commands.dispatch');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
