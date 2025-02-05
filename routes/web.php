<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AncestryController;
use App\Http\Controllers\FeatController;
use App\Http\Controllers\BackgroundController;

Route::inertia('/', 'Landing')->name('landing');
Route::inertia('/characters', 'Characters')->name('characters');
Route::inertia('/campaigns', 'Campaigns')->name('campaigns');
Route::inertia('/homebrew', 'Homebrew')->name('homebrew');
Route::inertia('/forums', 'Forums')->name('forums');


Route::middleware('auth')->group(function(){
    Route::inertia('/profile', 'Profile')->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function(){
    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'store']);
    Route::inertia('/login', 'Auth/Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});



Route::resource('ancestries', AncestryController::class, ['only' => ['index', 'show']]);
Route::resource('feats', FeatController::class, ['only' => ['index', 'show']]);
Route::resource('backgrounds', BackgroundController::class, ['only' => ['index', 'show']]);



