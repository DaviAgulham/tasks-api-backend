<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

Route::middleware('api')
    ->prefix('api')
    ->group(function () {
        Route::apiResource('tasks', TaskController::class);
    });
