<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|s
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/link', LinkController::class);
// Route::get('/links', function () {
//     return view('layouts.links');
// });
Route::resource('Games', GameController::class);
Route::get('/country/{countryID}/Game/{GameMetod}', [GameController::class, '']);