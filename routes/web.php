<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsController;
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


Route::middleware('auth')->group(function () {
    Route::get('/aanbieden', [CarsController::class, 'offerStep1'])->name('cars.offer.step1');
    Route::post('/aanbieden', [CarsController::class, 'processStep1'])->name('cars.offer.step1.process');
    Route::get('/aanbiedenstap2', [CarsController::class, 'offerStep2'])->name('cars.offer.step2');
    Route::post('/aanbiedenstap2', [CarsController::class, 'processStep2'])->name('cars.offer.step2.process');
});

require __DIR__ . '/auth.php';
