<?php

use App\Http\Controllers\GroupeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groupes', [GroupeController::class,'show']);
