<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\TtController;
use App\Http\Controllers\PhotoController;
 

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

Route::resource('/photos', PhotoController::class); //通常用複數


Route::get('/hello',[HelloController::class,'show']);
Route::get('/test',[TtController::class,'index']);

Route::get('/money',[MoneyController::class,'money']);


Route::get('/student/{name}', function ($name) {
    return view('student',['name'=> $name]);
});
