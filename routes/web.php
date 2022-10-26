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


/*練習1-1 利用view('welcome')函數，view()可以依welcome.blade.php內容產生網頁*/
Route::get('/', function () {
    return view('welcome');
});

/*練習1-2 設定 Route 回傳字串*/
Route::get('/',function (){
    return 'welcome';
});

/*練習1-3 設定 Route 跳轉頁面*/
Route::get('r1',function (){
   return redirect('r2');
});

Route::get('r2',function (){
    return view('welcome');
});