<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\DisqueController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ListeController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/genre', [GenreController::class, 'list']);
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre/create', [GenreController::class, 'create']);
Route::get('/genre/show/{id}', [GenreController::class, 'show']);
Route::get('/genre/update/{id}', [GenreController::class, 'update']);
Route::post('/genre/update', [GenreController::class, 'update']);
Route::get('/genre/delete/{id}', [GenreController::class, 'delete']);

Route::get('/artiste', [ArtisteController::class, 'list']);
Route::get('/artiste/create', [ArtisteController::class, 'create']);
Route::post('/artiste/create', [ArtisteController::class, 'create']);
Route::get('/artiste/show/{id}', [ArtisteController::class, 'show']);
Route::get('/artiste/update/{id}', [ArtisteController::class, 'update']);
Route::post('/artiste/update', [ArtisteController::class, 'update']);
Route::get('/artiste/delete/{id}', [ArtisteController::class, 'delete']);

Route::get('/disque', [DisqueController::class, 'list']);
Route::get('/disque/create', [DisqueController::class, 'create']);
Route::post('/disque/create', [DisqueController::class, 'create']);
Route::get('/disque/show/{id}', [DisqueController::class, 'show']);
Route::get('/disque/update/{id}', [DisqueController::class, 'update']);
Route::post('/disque/update', [DisqueController::class, 'update']);
Route::get('/disque/delete/{id}', [DisqueController::class, 'delete']);


// Route::middleware('auth')->group(function () {

// });

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/chat', [ChatController::class, 'index']);

// Route::get('/disque_show', [DisqueController::class, 'DisqueIndex']);
// Route::post('dataInsert', [DisqueController::class, 'DataInsert']);
// Route::get('/disque_list', [DisqueController::class, 'index']);
// Route::get('/disque_show', [DisqueController::class, 'delete']);


// Route::get('/genre_show', [GenreController::class, 'GenreIndex']);
// Route::post('dataInsert2', [GenreController::class, 'DataInsert2']);
// Route::get('/genre_show', [GenreController::class, 'index']);

// Route::get('/artiste_show', [ArtisteController::class, 'ArtisteIndex']);
// Route::post('dataInsert3', [ArtisteController::class, 'DataInsert3']);
// Route::get('/artiste_show', [ArtisteController::class, 'index']);


// Route::get('/liste', [ListeController::class, 'index']);
// Route::get('list', [ListeController::class, 'show']);