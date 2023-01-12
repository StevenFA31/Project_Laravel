<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PmuController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ArtistadController;
use App\Http\Controllers\ListController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/pmu', [PmuController::class, 'index']);
Route::get('/salon', [SalonController::class, 'index']);
Route::get('/list', [ListController::class, 'index']);
Route::get('/add', [AddController::class, 'index']);

Route::get('/Test', [ArtistadController::class, 'HomeIndex']);
Route::post('dataInsert', [ArtistadController::class, 'DataInsert']);

?>