<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
use App\Livewire\LiveSite;

use App\Livewire\ShowClients;
use App\Livewire\LiveClient;

use App\Livewire\LiveManage;

use App\Livewire\Inside\Manage\User\ManageUsers;
use App\Livewire\Inside\Manage\User\ManageUser;

use App\Livewire\Inside\Manage\Client\ManageClients;
use App\Livewire\Inside\Manage\Client\ManageClient;

use App\Livewire\Inside\Manage\Site\ManageSites;
use App\Livewire\Inside\Manage\Site\ManageSite;

use App\Livewire\Inside\Manage\Superviseur\ManageSuperviseurs;
use App\Livewire\Inside\Manage\Superviseur\ManageSuperviseur;

use App\Http\Controllers\WebController;

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


    Route::get('/clients/liveclient/{clientId}', LiveClient::class)->name('clients.liveclient');


    Route::get('/manage', function () {

        return view('interfaces', [
            'type' => 'manage',
        ]);

    })->name('manage');


    Route::get('/manage/livemanage/{superviseurId}', LiveManage::class)->name('manage.livemanage');

    //----------NEW ROUTES FOR MANAGE SECTION -----LE 21/11/25

    Route::get('/manage/manageusers', ManageUsers::class)->name('manage.manageusers');
    Route::get('/manage/manageusers/{userId}', ManageUser::class)->name('manage.manageusers.page');

    Route::get('/manage/manageclients', ManageClients::class)->name('manage.manageclients');
    Route::get('/manage/manageclients/{clientId}', ManageClient::class)->name('manage.manageclients.page');

    Route::get('/manage/managesites', ManageSites::class)->name('manage.managesites');
    Route::get('/manage/managesites/{siteId}', ManageSite::class)->name('manage.managesites.page');

    Route::get('/manage/managesuperviseurs', ManageSuperviseurs::class)->name('manage.managesuperviseurs');
    Route::get('/manage/managesuperviseurs/{superviseurId}', ManageSuperviseur::class)->name('manage.managesuperviseurs.page');

    

    Route::get('/manage/managecreate/view', [WebController::class, 'manage_create_page'])->name('manage.managecreateview');
    Route::post('/manage/managecreate/{modelname}', [WebController::class, 'manage_create_save'])->name('manage.managecreateview.post');
    
    //----------END-NEW ROUTES FOR MANAGE SECTION -----LE 21/11/25


});

