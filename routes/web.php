<?php

use App\Modules\Auth\Login\Infrastructure\Components\Pages\LoginPage;
use App\Modules\Catalog\Category\Infrastructure\Components\Pages\IndexCategoryPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// prefix
Route::prefix('admin')->name('admin.')->group(function () {
    Route::livewire('/login', LoginPage::class)->name('login');
    Route::livewire('/category', IndexCategoryPage::class)->name('category.index');
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    // Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('product', ProductController::class);

    Route::get('/settings', [\App\Http\Controllers\SettingController::class, 'index'])->name('settings');
    Route::post('/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{slug}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('category.show');
Route::get('/product/{slug}', [\App\Http\Controllers\CatalogController::class, 'product'])
    ->name('product.show');
