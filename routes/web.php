<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/departments', function () {
//     return view('departments');
// })->name('departments');

Route::get('/test', function () {
    return view('components/test');
})->name('test');