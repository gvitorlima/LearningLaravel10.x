<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/**
 * Diferentes formas de se usar um controller
 */
Route::get("/controller", [Controller::class, "randomInformationFramework"]);

// Caso o controller execute apenas 1 função - Abra o controller
Route::get("/controller2", Controller::class);
