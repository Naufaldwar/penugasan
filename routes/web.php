<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKontroler;
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

Route::get('/',[DataKontroler::class,'index']);
Route::get('/create',[DataKontroler::class,'create']);
Route::post('/store',[DataKontroler::class,'store']);
Route::get('/show/{id}',[DataKontroler::class,'show']);
Route::post('/update/{id}',[DataKontroler::class,'update']);
Route::get('/destroy/{id}',[DataKontroler::class,'destroy']);

