<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('components/login');
})->name('login');

Route::post('/register', [LoginController::class, 'viewpage']);
Route::post('/addUser', [LoginController::class, 'adduserss']);