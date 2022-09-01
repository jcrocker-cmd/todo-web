<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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



// Route::resource('/', ContactController::class);
// Route::resource('/', StudentController::class);

// Route::get('/', function () {
//     return view('contacts.click');
// });

// Route::resource('/', ContactController::class);

Route::get('/', [ContactController::class,'index']);
Route::get('/create', [ContactController::class,'create']);
Route::get('/show/{id}', [ContactController::class,'show']);
Route::get('/{id}/edit', [ContactController::class,'edit']);
Route::post('/store', [ContactController::class,'store']);
Route::patch('/update/{id}', [ContactController::class,'update']);
Route::delete('/destroy/{id}', [ContactController::class,'destroy']);

