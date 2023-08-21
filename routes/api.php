<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('student/{id}', [StudentController::class, 'show']);
Route::get('student/{id}/edit', [StudentController::class, 'edit']);
Route::put('student/{id}/edit', [StudentController::class, 'update']);
Route::delete('student/{id}/delete', [StudentController::class, 'destroy']);
