<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;


Route::get('/', function () {
    return view('calender');
});

Route::get('test', [CalenderController::class, 'index']);

