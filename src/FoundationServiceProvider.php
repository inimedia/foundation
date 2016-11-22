<?php

namespace Inimedia\Foundation;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app['router']->middleware('auth', \Illuminate\Auth\Middleware\Authenticate::class);
//        $router->middleware('auth', \Illuminate\Auth\Middleware\Authenticate::class);

        require __DIR__.'/routes.php';
//        if (! $this->app->routesAreCached()) {
//            require __DIR__.'/routes.php';
//        }
//        $this->loadViewsFrom(__DIR__ . '/views', 'foundation');
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes([
//            __DIR__ . '/views' => base_path('resources/views/inimedia/foundation'),
//            __DIR__.'/config/foundation.php' => config_path('foundation.php'),
        ]);
//        $this->publishes([ __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations' ], 'migrations');

//        $this->publishes([
//            __DIR__.'/assets' => public_path('inimedia/foundation'),
//        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/foundation.php', 'inimedia-foundation'
        );
    }
}
