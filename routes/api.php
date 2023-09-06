<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json(Auth::user()->load(['reservations.event.club','roles']));
});

Route::post('/users/{user}/sync_roles', [UserController::class, 'syncRoles']);


Route::get('/clubs/{club}/events', [ClubController::class, 'getEvents']);
// Route::post('/clubs/{club}', [ClubController::class, 'update']);

Route::get('/events/{event}/reservations', [EventController::class, 'getReservations']);


// Route::apiResource('users', UserController::class);
Route::apiResource('clubs', ClubController::class);
Route::apiResource('events', EventController::class);
Route::apiResource('reservations', ReservationController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('users', UserController::class);

