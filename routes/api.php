<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::post('/register', UserController::class.'@register');


Route::post("/hello",function(){
    return response()->json(["data"=>"dodo post "]);
});



Route::post('/login', function (Request $request) {
    // هنا   تسجيل الدخول
    return response()->json(['message' => 'تم تسجيل الدخول بنجاح!']);
});
