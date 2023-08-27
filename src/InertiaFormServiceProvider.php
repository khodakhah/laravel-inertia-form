<?php

namespace Khodakhah\InertiaForm;

use Illuminate\Support\ServiceProvider;

class InertiaFormServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/inertia-form.php', 'inertia-form');

        $this->singleton('inertia-form', function ($app) {
            return new InertiaForm($app);
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'inertia-form');

        $this->publishes(
            [
                __DIR__.'/../config/inertia-form.php' => config_path('inertia-form.php'),
            ],
            'config'
        );
    }
}