<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('landing');
});

Route::post('/leads', [LeadController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('leads.store');

// Fallback serving of hashed build assets to avoid 404s in constrained environments.
Route::get('/build/assets/{filename}', function (string $filename) {
    $path = public_path('build/assets/'.$filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $mime = File::mimeType($path) ?: 'application/octet-stream';
    return Response::file($path, ['Content-Type' => $mime]);
})->where('filename', '.*');
