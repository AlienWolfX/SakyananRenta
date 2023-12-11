<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarsController;

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

// Public Routes
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

// For Testing (Dapat naa nisa sa Protected Routes)
// Route::controller(CarsController::class)->group(function () {
//     Route::get('cars', 'index');
// });

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::controller(CarsController::class)->group(function () {
        Route::get('cars', 'index');
    });
    Route::post('logout', [AuthController::class, 'logout']);
});


