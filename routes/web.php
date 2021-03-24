<?php

use App\Http\Controllers\UserController;
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
    return view('login');
});
Route::get('UserList',[UserController::class,'list']);
Route::get('create',[UserController::class,'create']);
Route::get('Login',[UserController::class,'login']);
Route::get('Layout',[UserController::class,'layout']);
Route::post('register',[UserController::class,'register']);
Route::post('Signup',[UserController::class,'Signup']);