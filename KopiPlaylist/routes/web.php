<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        // Define your datas array
        $datas = [
            ['name' => 'Kedai1', "playlistURL" => "https://www.youtube.com/watch?v=4LcpkfQ0IoI&ab_channel=OrrinMonro"],
            ['name' => 'Kedai2', "playlistURL" => "null"]
        ];
    
        // Pass $datas to the view
        return view('welcome', ['datas' => $datas]);
});
