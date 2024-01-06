<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;

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
    return view('welcome');
});

Route::get('/play', [PlaylistController::class, 'show'])->name('play');
Route::post('/play', [PlaylistController::class, 'add'])->name('play.add');
