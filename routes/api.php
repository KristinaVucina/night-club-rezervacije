<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return User::find(1);
});

Route::get('/clubs/{club}/events', [ClubController::class, 'getEvents']);
Route::get('/events/{event}/reservations', [EventController::class, 'getReservations']);


// Route::apiResource('users', UserController::class);
Route::apiResource('clubs', ClubController::class);
Route::apiResource('events', EventController::class);
Route::apiResource('reservations', ReservationController::class);

