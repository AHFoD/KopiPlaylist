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


Route::get('/playlistinfo/{id}', [PlaylistController::class, 'showplaylist'])->name('playlistinfo');
// Route::get('/play', [PlaylistController::class, 'showname'])->name('play');
// Route::post('/', [PlaylistController::class, 'add'])->name('add');

Route::get('/', [PlaylistController::class, 'getPlaylist'])->name('welcome');
Route::post('/addData', [PlaylistController::class, 'addData'])->name('addData');

