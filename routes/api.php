<?php

use App\Http\Controllers\CustomerPreferncesController;
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
Route::group([ 'prefix'=>'v1/customer','middleware'=>'set_default_currency'],function () {

    Route::get('/{customer_id}/preferences/get',[CustomerPreferncesController::class,'show']);
    Route::post('/preferences/save',[CustomerPreferncesController::class,'store']);
    Route::put('/preferences/update/{id}',[CustomerPreferncesController::class,'update']);
    Route::delete('/preferences/delete/{id}',[CustomerPreferncesController::class,'destroy']);


});
