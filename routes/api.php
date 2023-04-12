
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::get('user/{id}/edit', [UserController::class, 'edit']);
Route::put('user/{id}/edit', [UserController::class, 'update']);
Route::delete('user/{id}/delete', [UserController::class, 'destroy']);