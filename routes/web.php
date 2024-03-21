<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about-us', [PageController::class, 'about'])->name('about-us');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('services/{slug}', [PageController::class, 'service_details'])->name('service.show');
Route::get('contact-us', [PageController::class, 'contact_us'])->name('contact-us');
Route::post('submit-inquiry', [PageController::class, 'submit_inquiry'])->name('submit-inquiry');
Route::get('faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy-policy');

/**
 * Dashboard Web Routes
 */
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    // Services
    Route::get('services', [ServiceController::class, 'index'])->name('dashboard.index.services');
    Route::get('services/{id}', [ServiceController::class, 'show'])->name('dashboard.show.service');
    Route::get('services/create', [ServiceController::class, 'create'])->name('dashboard.create.service');
    Route::get('services/store', [ServiceController::class, 'store'])->name('dashboard.store.service');
    Route::post('services/{id}/update', [ServiceController::class, 'update'])->name('dashboard.update.service');
    Route::post('services/{id}/publish', [ServiceController::class, 'publish'])->name('dashboard.publish.service');
    Route::post('services/{id}/destroy', [ServiceController::class, 'destroy'])->name('dashboard.destroy.service');

    // SEO pages
    Route::get('pages', [PageController::class, 'list_pages'])->name('dashboard.index.pages');
    Route::get('pages/{id}', [PageController::class, 'show'])->name('dashboard.show.page');
    Route::get('pages/add', [PageController::class, 'store'])->name('dashboard.store.page');
    Route::post('pages/{id}/update', [PageController::class, 'update'])->name('dashboard.update.page');

    // User
    Route::get('users', [PageController::class, 'index'])->name('dashboard.index.users');
    Route::get('users/{id}', [PageController::class, 'show'])->name('dashboard.show.user');
    Route::get('users/create', [PageController::class, 'index'])->name('dashboard.create.user');
    Route::get('users/{id}/edit', [PageController::class, 'index'])->name('dashboard.edit.user');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
