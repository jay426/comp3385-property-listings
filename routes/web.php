<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

// Route for the home page (optional)
Route::get('/', function () {
    return redirect('/properties');
});

// Display the form to create a new property
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');

// Handle the form submission to store a new property
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');

// Display a list of all properties
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

// Display details of an individual property
Route::get('/properties/{property}', [PropertyController::class, 'show'])->name('properties.show');