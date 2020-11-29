<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('home',function(){
//    return view('home.index');
//});

//舊語法
//Route::get('hello/{name?}',['as'=>'hello.index','uses'=>'HelloConroller@index']);
Route::get('hello/{name?}', [HelloController::class, 'index']);

//舊語法
//Route::get('home',['as'=>'home.index','uses'=>'HomeConroller@index']);
Route::get('home', [HomeController::class, 'index']);
