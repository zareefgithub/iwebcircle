<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Posts Management
    Route::resource('posts', PostController::class)->names([
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'show' => 'admin.posts.show',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]);

    // Products Management
    Route::resource('products', ProductController::class)->names([
        'index' => 'admin.products.index',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'show' => 'admin.products.show',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ]);

    // Testimonials Management
    Route::resource('testimonials', TestimonialController::class)->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'store' => 'admin.testimonials.store',
        'show' => 'admin.testimonials.show',
        'edit' => 'admin.testimonials.edit',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
    ]);

    // Contact Submissions
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::patch('/contacts/{contact}/mark-read', [ContactController::class, 'markAsRead'])->name('admin.contacts.mark-read');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

    // Settings
    Route::get('/settings/contact', [SettingsController::class, 'contact'])->name('admin.settings.contact');
    Route::put('/settings/contact', [SettingsController::class, 'updateContact'])->name('admin.settings.contact.update');
    Route::get('/settings/about', [SettingsController::class, 'about'])->name('admin.settings.about');
    Route::put('/settings/about', [SettingsController::class, 'updateAbout'])->name('admin.settings.about.update');
});

