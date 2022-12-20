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


Route::get('test',[\App\Http\Controllers\Admin\CategoryController::class,'index']);
Route::resource('categories','App\Http\Controllers\Admin\CategoryController');
Route::resource('tags','App\Http\Controllers\Admin\TagController');
Route::resource('ads','App\Http\Controllers\Admin\AdsController');
Route::post('filterCategories','App\Http\Controllers\Admin\AdsController@filterCategory');
Route::post('filterTags','App\Http\Controllers\Admin\AdsController@filterCategory');
Route::post('advertiserAds/{id?}','App\Http\Controllers\Admin\AdsController@advertiserAds');
