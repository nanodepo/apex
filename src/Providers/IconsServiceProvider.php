<?php

namespace NanoDepo\Heroicons\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::componentNamespace('NanoDepo\\Heroicons\\Views\\Components', 'icon');
    }
}
