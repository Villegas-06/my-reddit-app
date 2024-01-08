<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedditController;
use App\Http\Controllers\TopicsController;

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

Route::get('/fetch-data', [RedditController::class, 'fetchDataAndStore']);

Route::get('/reddit-topics', [TopicsController::class, 'getTopicController']);
Route::get('/reddit-topics/{id}', [TopicsController::class, 'getTopicId']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
