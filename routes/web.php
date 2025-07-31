<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController; // We add this now for the future

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route for displaying the main single page
Route::get('/', [PageController::class, 'index'])->name('home');

// We define the route for the contact form submission now
// It won't work yet, but it's good practice to have it defined
Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');