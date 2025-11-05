<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\LiveSite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

    Route::get('/sites', function () {
        return view('sites');
    })->name('sites');

    // Route::get('/livesite', LiveSite::class)->name('sites');
    // Route::get('/sites/livesite', LiveSite::class)->name('sites');
    Route::get('/sites/livesite/{siteId}', LiveSite::class)->name('sites.livesite');

});
