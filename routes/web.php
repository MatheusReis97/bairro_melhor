<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::apiResource('login' , LoginController::class);