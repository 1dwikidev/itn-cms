<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    Route::get('/',[HomeController::class,'index']);
// });
