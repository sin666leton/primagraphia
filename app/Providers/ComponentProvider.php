<?php

namespace App\Providers;

use App\Modules\Shared\Infrastructure\Components\Layouts\AdminLayout;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ComponentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Livewire::addLocation(classNamespace: 'App\\Modules');
        Blade::component(AdminLayout::class, 'layouts-admin');
    }
}
