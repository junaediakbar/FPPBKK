<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\API\RegisterController;
Route::post('register',[RegisterController::class,'register']);
Route::post('login',[RegisterController::class,'login']);

use App\Http\Controllers\API\ThirdPaymentController;
use App\Http\Controllers\API\ReviewController;



Route::resource('thirdpayment',ThirdPaymentController::class)->only(['index','show']);
Route::resource('review',ReviewController::class)->only(['index','show']);
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('thirdpayment',ThirdPaymentController::class)->except(['index','show']);
});