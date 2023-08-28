<?php

use App\Http\Controllers\api\HomeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home',[HomeController::class,'index']);

//api/v1/
Route::namespace('App\\Http\\Controllers\\Api\\V1')->prefix('v1')->group( function(){
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices',InvoiceController::class);
});