<?php

use App\Http\Controllers\API\FAQController;
use App\Http\Controllers\API\FeedbackController;
use App\Http\Controllers\API\LegendController;
use App\Http\Controllers\API\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return $request->user();
});

Route::get('/pages/{slug}', [PageController::class, 'view']);
Route::get('/faqs', [FAQController::class, 'index']);
Route::resource('feedbacks', FeedbackController::class);
Route::get('/legend', [LegendController::class, 'index']);

