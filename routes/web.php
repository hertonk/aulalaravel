<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/participant/certificate', [CertificateController::class, 'participant']);

Route::get('/monitor/certificate', [CertificateController::class, 'monitor']);

Route::get('/guest/certificate', [CertificateController::class, 'guest']);

Route::get('/event/create', [EventController::class, 'create']);

Route::post('/event/store', [EventController::class, 'store']);

