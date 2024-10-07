<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
//controller invokle, tem essa forma de chamada, pois só tem apenas 1 metodo
Route::get('/', WelcomeController::class);
