<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\firstTest;
use App\Http\Controllers\TasksController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', [firstTest::class, 'index']); 


Route::get('getTasks', [TasksController::class, 'index']);