<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Change;
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
Route::group(["middleware" => "apikey.validate"], function () {
	Route::get('/tipo-cambio', function () {
    $changes = change::select('tc_venta','tc_compra')->get();;

return response()->json( $changes );
});

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
