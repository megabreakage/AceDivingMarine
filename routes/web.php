<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/service/{$slug}', [PageController::class, 'service-details'])->name('service.show');
Route::get('/contact-us', [PageController::class, 'contact-us'])->name('contact-us');
Route::get('/faqs', [PageController::class, 'contact-us'])->name('faqs');
Route::get('/privacy-policy', [PageController::class, 'contact-us'])->name('privacy-policy');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
