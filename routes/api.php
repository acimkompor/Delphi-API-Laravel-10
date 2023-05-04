<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('religion', [AgamaController::class, 'index']);
Route::get('employee', [PegawaiController::class, 'index']);
Route::post('employee-add', [PegawaiController::class, 'addPegawai']);
Route::post('employee-edit', [PegawaiController::class, 'editPegawai']);
Route::post('employee-delete', [PegawaiController::class, 'deletePegawai']);
