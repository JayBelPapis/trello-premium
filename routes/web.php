<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrelloHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CardController;

use App\Http\Controllers\ProfileController;


use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('welcome');
})
->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home/{id}', [TrelloHomeController::class, 'show'])
    ->name('home.show');

/*Route::get('/home/{id}', [TrelloHomeController::class, 'showCard'])
    ->name('home.show');*/

Route::post('/home', [TrelloHomeController::class, 'store'])
    ->name('home.store');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::resource('profile', ProfileController::class);

