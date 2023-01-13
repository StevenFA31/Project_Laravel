<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ListeController;
use App\Http\Controllers\ArtisteuController;
use App\Http\Controllers\GenreuController;
use App\Http\Controllers\DisqueuController;
use App\Http\Controllers\ChatController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/chat', [ChatController::class, 'index']);

Route::get('/disque', [DisqueuController::class, 'DisqueIndex']);
Route::post('dataInsert', [DisqueuController::class, 'DataInsert']);

Route::get('/genre', [GenreuController::class, 'GenreIndex']);
Route::post('dataInsert2', [GenreuController::class, 'DataInsert2']);


Route::get('/artiste', [ArtisteuController::class, 'ArtisteIndex']);
Route::post('dataInsert3', [ArtisteuController::class, 'DataInsert3']);

Route::get('/liste', [ListeController::class, 'index']);
Route::get('list', [ListController::class, 'show']);