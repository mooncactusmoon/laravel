<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbcController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/abcs_get_form',[AbcController::class,'myForm'])->name('abcs.myform');
Route::resource('abcs',AbcController::class);

// Route::post('/students_get_form',[StudentController::class,'myForm'])->name('students.myform');
Route::resource('students',StudentController::class);

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});