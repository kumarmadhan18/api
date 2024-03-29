<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Container\Container.php;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products',ProductController::class);

Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{product}/reviews','ReviewController');
});
