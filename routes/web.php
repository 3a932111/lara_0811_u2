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

/*練習 2-1：修改 Route 接收參數*/
Route::get('hello/{name}',function ($name){
    return 'Hello,'.$name;
});

/*練習 2-2：修改參數成選擇性*/
Route::get('hello/{name?}',function ($name='everybody'){
    return 'Hello,'.$name;
});

/*練習3 使用 artisan 指令了解目前 route 內容-新增Route觀察Route table*/
Route::get('good',function (){
    return 'im good';
});
