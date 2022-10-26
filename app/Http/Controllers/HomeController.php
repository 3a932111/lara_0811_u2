<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /*練習7-3 設定回傳預設首頁*/
        return view('welcome');
    }
}
