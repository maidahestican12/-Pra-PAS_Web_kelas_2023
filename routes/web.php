<?php

use Illuminate\Support\Facades\Route;
use App\Models\Events;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\WorkshopsController;
use App\Http\Controllers\DaftarrController;

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



Route::get('/event/all', [EventsController::class, 'index']);
Route::get('/event/detail/{event}', [EventsController::class, 'show']);

Route::get('/workshops/all', [WorkshopsController::class, 'index']);
Route::get('/workshops/detail/{workshops}', [WorkshopsController::class, 'show']);

Route::get('/daftar/all', [DaftarrController::class, 'index']);
Route::get('/daftar/detail/{daftar}', [DaftarrController::class, 'show']);

