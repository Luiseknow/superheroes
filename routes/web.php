<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

Route::resource('superheroes', SuperheroController::class);

Route::get('/deleted', [SuperheroController::class, 'deleted'])->name('superheroes.deleted');
Route::post('/restore/{id}', [SuperheroController::class, 'restore'])->name('superheroes.restore');