<?php

use App\Http\Controllers\api\BankController;
use App\Http\Controllers\api\NasabahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function () {
    Route::prefix('nasabah')->group(function () {
        Route::get('all', [NasabahController::class, 'getAll']);
        Route::post('create', [NasabahController::class, 'create']);
        Route::delete('delete/{id}', [NasabahController::class, 'destroy']);
    });
    Route::prefix('bank')->group(function () {
        Route::get('all', [BankController::class, 'getAll']);
    });
    Route::prefix('pengempul')->group(function () {
        Route::get('all', [NasabahController::class, 'getAll']);
    });
});


Route::any('{any}', function () {
    return response()->json([
        'status' => 'error',
        'message' => 'Resource not found'
    ], 404);
})->where('any', '.*');
