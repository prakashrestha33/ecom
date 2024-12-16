<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest')
    ->name('api.register');

Route::post('/login', [AuthController::class, 'login'])->name('api.login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user',  function (Request $request) {
        return $request->user();
    });

});


//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});





