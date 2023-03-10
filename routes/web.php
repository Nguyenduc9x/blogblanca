<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware'=>['auth']],function(){
    Route::get('home',function(){
        return view('home');
    });
    Route::get('user',[UserController::class,'index']);
});

Route::get('test',[TestController::class,'index']);
