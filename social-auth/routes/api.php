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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/test",function(){
    return "fahad lives here";
});

Route::post('/update_user_data',[App\Http\Controllers\SocialLoginController::class,'updateUser']);

Route::post('/logout',[App\Http\Controllers\SocialLoginController::class,'logout']);

Route::post('/getFirstPatientData',[App\Http\Controllers\SocialLoginController::class,'getFirstPatientData']);
Route::post('/getSecondPatientData',[App\Http\Controllers\SocialLoginController::class,'getSecondPatientData']);
Route::post('/getThirdPatientData',[App\Http\Controllers\SocialLoginController::class,'getThirdPatientData']);
Route::post('/getFourthPatientData',[App\Http\Controllers\SocialLoginController::class,'getFourthPatientData']);
Route::post('/getFifthPatientData',[App\Http\Controllers\SocialLoginController::class,'getFifthPatientData']);
Route::post('/getSixthPatientData',[App\Http\Controllers\SocialLoginController::class,'getSixthPatientData']);