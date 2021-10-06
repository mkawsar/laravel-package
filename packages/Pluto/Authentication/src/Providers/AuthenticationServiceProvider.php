<?php

namespace Pluto\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Pluto\Authentication\Http\Controllers\AuthenticationController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'authentication');
        $this->publishes([
            __DIR__ . '/../Resources/views' => base_path('/resources/views/pluto')
        ]);
    }
}
