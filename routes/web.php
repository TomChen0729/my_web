<?php

use App\Http\Controllers\CountryController;
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
Route::get('/links', function () {
    return view('layouts.links');
});

Route::get('/level', function () {
    return view('pages.level');
});

Route::get('/start', function () {
    return view('pages.start');
});

Route::get('/story', function () {
    return view('pages.story');
});

Route::get('/choose', function () {
    return view('layouts.choose');
});

Route::get('/choosegame', function () {
    return view('layouts.choosegame');
});

Route::get('/chooselevel', function () {
    return view('layouts.chooselevel');
});

Route::get('/circle', function () {
    return view('layouts.circle');
});

Route::get('/connect', function () {
    return view('layouts.connect');
});

Route::get('/debug', function () {
    return view('layouts.debug');
});

Route::get('/recom', function () {
    return view('layouts.recom');
});
// Route::get('/links', function () {
//     return view('layouts.links');
// });
Route::resource('countries', CountryController::class);
Route::get('/', [CountryController::class , 'index'])->name('root');
Route::resource('Games', GameController::class);

// Route::get('/country/{countryID}/Game/{GameMetod}', [GameController::class, '']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
