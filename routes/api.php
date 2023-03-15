<?php

//importanto controllers para as rotas
use App\Http\Controllers\api\MainController;
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
Route::get('/',  [MainController::class, 'index']);
Route::post('/store',  [MainController::class, 'store']);

