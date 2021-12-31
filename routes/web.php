<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', App\Http\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::get('/activity', App\Http\Livewire\Activity\Index::class)->name('activity');
    Route::get('/user', App\Http\Livewire\User\Index::class)->name('user');
});
