<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Paket_Wisata;
use App\Models\Pesan;
use App\Models\Guide;
use App\Models\Tempat_Wisata;
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

Route::get('/paket', function (Request $request) {
    $pakets = Paket_Wisata::get();

    return response()->json([
        'status' => 'success',
        'message' => 'success get data paket',
        'data' => $pakets
    ]);
});
Route::get('/pesan', function (Request $request) {
    $pesans = Pesan::get();

    return response()->json([
        'status' => 'success',
        'message' => 'success get data pesan',
        'data' => $pesans
    ]);
});

Route::get('/guide', function (Request $request) {
    $guides = Guide::get();

    return response()->json([
        'status' => 'success',
        'message' => 'success get data guide',
        'data' => $guides
    ]);
});

Route::get('/tempat', function (Request $request) {
    $tempats = Tempat_Wisata::get();

    return response()->json([
        'status' => 'success',
        'message' => 'success get data tempat wisata',
        'data' => $tempats
    ]);
});