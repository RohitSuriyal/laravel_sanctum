<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PostController;
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);




Route::get('/post', function (Request $request) {
   

return response()->json([

    "name"=>"rohit singh",
]);
 
   
})->middleware('auth:sanctum');
Route::post('/logout', function (Request $request) {
   
    $request->user()->tokens()->delete();

    return response()->json(['message' => 'Logged out']);
})->middleware('auth:sanctum');
