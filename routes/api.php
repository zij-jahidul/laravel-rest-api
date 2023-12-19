<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('brands', BrandsController::class);
Route::resource('categories', CategoriesController::class);
