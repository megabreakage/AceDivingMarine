<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about-us');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{slug}', [PageController::class, 'service_details'])->name('service.show');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('contact-us');
Route::post('/submit-inquiry', [PageController::class, 'submit_inquiry'])->name('submit-inquiry');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy-policy');

/**
 * Dashboard Web Routes
 */
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(
    function () {
        // Dashboard
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');

        // Services
        Route::get('services', [ServiceController::class, 'index'])->name('dashboard.index.services');
        Route::get('services/{id}', [ServiceController::class, 'show'])->name('dashboard.show.service');
        Route::get('services/add', [ServiceController::class, 'store'])->name('dashboard.store.service');
        Route::post('services/{id}/update', [ServiceController::class, 'update'])->name('dashboard.update.service');
        Route::post('services/{id}/publish', [ServiceController::class, 'publish'])->name('dashboard.publish.service');
        Route::post('services/{id}/destroy', [ServiceController::class, 'destroy'])->name('dashboard.publish.service');
    }
);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
