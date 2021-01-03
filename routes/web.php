<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',[TicketController::class,'index']);
Route::get('create',[TicketController::class,'create']);
Route::post('create',[TicketController::class,'store']);
Route::get('update/{ticket}',[TicketController::class,'show']);
Route::post('update/{ticket}',[TicketController::class,'update']);
Route::get('delete/{ticket}',[TicketController::class,'delete']);
Route::post('delete/{ticket}',[TicketController::class,'destroy']);