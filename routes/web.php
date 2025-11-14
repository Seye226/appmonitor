<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\LiveSite;

use App\Livewire\ShowClients;
use App\Livewire\LiveClient;
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
    Route::get('/jetstream-info', function () {
        return view('jetstream-info');
    })->name('jetstream-info');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::get('/sites', function () {

        return view('interfaces', [
            'type' => 'sites',
        ]);

            // // return view('sites');

            // $sites = \App\Models\Site::all();

            // // $sites = \App\Models\Site::where('description', 'like', '%' . $this->search . '%')
            // //     ->orWhere('reference', 'like', '%' . $this->search . '%')
            // //     ->orWhere('localisation', 'like', '%' . $this->search . '%')
            // //     ->get();

            // return view('sites', [
            //     'sites' => $sites,
            // ]);


    })->name('sites');

    // Route::get('/livesite', LiveSite::class)->name('sites');
    // Route::get('/sites/livesite', LiveSite::class)->name('sites');
    Route::get('/sites/livesite/{siteId}', LiveSite::class)->name('sites.livesite');



    // Route::get('/clients', ShowClients::class)->name('clients');
    Route::get('/clients', function () {

        return view('interfaces', [
            'type' => 'clients',
        ]);

    })->name('clients');


    Route::get('/manage', function () {

        return view('interfaces', [
            'type' => 'manage',
        ]);

    })->name('manage');


    Route::get('/clients/liveclient/{clientId}', LiveClient::class)->name('clients.liveclient');


    
});
