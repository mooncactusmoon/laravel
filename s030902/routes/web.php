<?php

use Illuminate\Support\Facades\Route;
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

//     $url = route('students.edit', ['student' => 55688]);
//     // $url = route('students.edit');
//     echo $url;
//     // return view('welcome');
// });

Route::resource('students', StudentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
