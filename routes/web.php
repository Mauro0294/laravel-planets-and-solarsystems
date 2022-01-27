<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemsController;

// Route zonder path
Route::get('/', [PlanetController::class, 'home'])->name('home');

// Routes voor toevoegen van planeten
Route::get('planets/insert', [PlanetController::class, 'insertForm'])->name('insertformplanets');
Route::post('planets/create', [PlanetController::class, 'insertData'])->name('insertplanet');

// Routes voor planeten overzicht
Route::get('/planets', [PlanetController::class, 'index'])->name('showplanets');
Route::get('/planets/{planeet}', [PlanetController::class, 'show'])->name('showplanet');

// Routes voor toevoegen van sterrenstelsels
Route::get('/solarsystems/insert', [SolarSystemsController::class, 'insertform'])->name('insertformsolarsystems');
Route::post('/solarsystems/create', [SolarSystemsController::class, 'insertData'])->name('insertsolarsystems');

// Routes voor de sterrenstelsels overzicht
Route::get('/solarsystems', [SolarSystemsController::class, 'index'])->name('showsolarsystems');
Route::get('/solarsystems/{id}', [SolarSystemsController::class, 'show'])->name('showsolarsystem');

// Redirect route voor verkeerde url's
Route::get('/planets/planets/{planeet}', function () {
    return redirect('/planets');
});
?>