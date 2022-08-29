<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksisController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/gaji/{kunci}/{tahun}/{bulan}/{opd}', [TransaksisController::class, 'ambil_data_gaji']);
Route::get('/gaji_detail/{kunci}/{tahun}/{bulan}/{opd}', [TransaksisController::class, 'ambil_data_gaji_detail']);
