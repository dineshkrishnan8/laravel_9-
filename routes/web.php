<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\loginController;

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
// Route::get('about',function(){
//     return 'about';
// });
Route::get('/',[usersController::class,'front']);
Route::get('/reg',[usersController::class,'index']);
Route::post('user-save',[usersController::class,'save']);
Route::get('user-edit/{id}',[usersController::class,'edit']);
Route::post('user-update',[usersController::class,'update']);
Route::get('user-delete/{id}',[usersController::class,'delete']);
Route::get('/login',[loginController::class,'index']);
Route::post('/check',[loginController::class,'check'])->name('check');
Route::get('/data',[loginController::class,'data'])->name('data');
Route::get('/sample',[loginController::class,'sample'])->name('sample');