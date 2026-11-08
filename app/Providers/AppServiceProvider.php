<?php

namespace App\Providers;

use App\Models\Setting;
use App\Modules\Catalog\Category\Application\Contracts\CategoryQueryContract;
use App\Modules\Catalog\Category\Infrastructure\Repositories\CategoryQueryRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryQueryContract::class, CategoryQueryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Setting::pluck('value', 'key'); //select value, key from settings
        // $settings['site_logo']->value;
        View::share('settings', $settings);
    }
}
