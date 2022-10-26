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


/*練習一 利用view('welcome')函數，view()可以依welcome.blade.php內容產生網頁*/
Route::get('/', function () {
    return view('welcome');
});
