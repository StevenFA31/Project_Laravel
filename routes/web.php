<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PmuController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ArtistadController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\TestController;




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

Route::get('/', [HomeController::class, 'index']);
Route::get('/pmu', [PmuController::class, 'index']);
Route::get('/salon', [SalonController::class, 'index']);
Route::get('/list', [ListController::class, 'index']);
Route::get('/add', [AddController::class, 'index']);

Route::get('/Test', [TestController::class, 'HomeIndex']);
Route::post('dataInsert', [TestController::class, 'DataInsert']);

// Route::get('/test', [TestController::class, 'index']);

// Route::view('test', 'Test');
// Route::post('test', [TestController::class, 'addDataa']);


// Route::post('add', [ArtistadController::class . 'addData'])


?>