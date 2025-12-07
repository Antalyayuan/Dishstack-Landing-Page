<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::post('/leads', [LeadController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('leads.store');
