<?php

use App\Http\Controllers\TranslationController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/projects', [TranslationController::class, 'index']);
Route::get('/locales', [TranslationController::class, 'getLocales']);
Route::get('/projects/{id}', [TranslationController::class, 'show']);

Route::post('/translate', [TranslationController::class, 'translate']);