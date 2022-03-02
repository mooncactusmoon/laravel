<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/test', function () {
    echo "hello test laravel";
    // return view('welcome');
});

Route::get('/student', function () {
    return view('student');
    // $myArr=[1,3,5,7];
    // dd($myArr);
    // return view('welcome');
});

Route::get('/user/{id}/{address}', function ($id,$address) {
    $text=$id."+".$address;
    dd($text);
});
Route::get('/student/{name}', function ($name) {
    return view('student',['name'=>$name]);
});

