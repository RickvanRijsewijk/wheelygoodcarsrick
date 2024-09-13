<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;

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
})->name('home');

Route::get('/aanbodplaatsenstap2', [CarController::class, 'processStep1'])->name('cars.offer.step1');


Route::middleware('auth')->group(function () {
    Route::get('/aanbodplaatsen', function () {
        return view('aanbodplaatsen');
    })->name('aanbodplaatsen');

    Route::get('/aanbodplaatsenstap2', function () {
        return view('aanbodplaatsenstap2');
    })->name('aanbodplaatsenstap2');
});

require __DIR__ . '/auth.php';
