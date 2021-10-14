<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('simplelogin',[App\Http\Controllers\SocialLoginController::class,'Login'])->name('simplelogin');


Route::get('login/github',[App\Http\Controllers\SocialLoginController::class,'redirectToGithub'])->name('login.github');
Route::get('login/github/callback',[App\Http\Controllers\SocialLoginController::class,'handleGithubCallback']);


Route::get('login/facebook',[App\Http\Controllers\SocialLoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\SocialLoginController::class,'handleFacebookCallback']);


Route::get('login/google',[App\Http\Controllers\SocialLoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\SocialLoginController::class,'handleGoogleCallback']);