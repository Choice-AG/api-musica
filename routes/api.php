<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MusicController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ProvidersController;
use App\Http\Controllers\Api\ProductProviderController;
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

// Endpoints
Route::get('/', function () {
    return response()->json([
        //documentation
        'message' => 'Welcome to the Music API.',
        'links' => [
            'users' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/users',
            'users{user_id}' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/users/{user_id}',
            'music' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/music',
            'music{music_id}' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/music/{music_id}',
            'providers' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/providers',
            'providers{music_id}' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/productprovider/{music_id}',
            'productprovider' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/productprovider',
            'productprovider{music_id}' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/productprovider/{music_id}',
            'register' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/register',
            'login' => 'https://naughty-dhawan.93-93-114-91.plesk.page/api/login',
        ]
    ]);
});

//Users
Route::get('users', [UsersController::class, 'index']);
Route::post('users', [UsersController::class, 'store']);
Route::get('users/{user}', [UsersController::class, 'show']);
Route::put('users/{user}', [UsersController::class, 'update']);
Route::delete('users/{user}', [UsersController::class, 'destroy']);

//Auth
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

//Music
Route::get('music', [MusicController::class, 'index']);
Route::post('music', [MusicController::class, 'store']);
Route::get('music/{music}', [MusicController::class, 'show']);
Route::put('music/{music}', [MusicController::class, 'update']);
Route::delete('music/{music}', [MusicController::class, 'destroy']);

//Providers
Route::get('providers', [ProvidersController::class, 'index']);
Route::post('providers', [ProvidersController::class, 'store']);
Route::get('providers/{provider}', [ProvidersController::class, 'show']);
Route::put('providers/{provider}', [ProvidersController::class, 'update']);
Route::delete('providers/{provider}', [ProvidersController::class, 'destroy']);

//ProductProvider
Route::get('productprovider', [ProductProviderController::class, 'index']);
Route::post('productprovider', [ProductProviderController::class, 'store']);
Route::get('productprovider/{music_id}', [ProductProviderController::class, 'show']);
Route::put('productprovider/{music_id}', [ProductProviderController::class, 'update']);
Route::delete('productprovider/{music_id}', [ProductProviderController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
