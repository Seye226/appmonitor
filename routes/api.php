<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/sites', [\App\Http\Controllers\ApiController::class, 'getSites']);
Route::get('/sites/{id}', [\App\Http\Controllers\ApiController::class, 'getSite']);
Route::get('/searchSites', [\App\Http\Controllers\ApiController::class, 'searchSites']);


Route::get('/sites/{id}/records', [\App\Http\Controllers\ApiController::class, 'receiveSiteRecords']);
// Route::post('/sites/{id}/records', [\App\Http\Controllers\ApiController::class, 'receiveSiteRecords']);


// Route::get('/post/{topic}/{item}/{name}/{data_value}/{data_time}', [\App\Http\Controllers\ApiController::class, 'index']);
Route::get('/post/{siteref}/{topic}/{item}/{name}/{data_value}/{data_time}', [\App\Http\Controllers\ApiController::class, 'index']);
