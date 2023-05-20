<?php

use App\Http\Controllers\ap1\v1\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'v1'],function(){
  Route::apiResource('posts',PostsController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
