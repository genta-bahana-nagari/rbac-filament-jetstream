<?php

use App\Livewire\Posts\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/posts', Index::class)->name('posts.index'); // tanpa role

    // hanya user dengan role siswa yang bisa akses
    Route::get('/posts', Index::class)->name('posts.index')->middleware('role:Siswa');
});
