<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/job',[jobController::class, 'index']);
