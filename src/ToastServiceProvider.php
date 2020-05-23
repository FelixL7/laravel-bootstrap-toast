<?php

namespace FelixL7\Toast;

use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bootstrap-toast');

        $this->app->singleton('bootstrap-toaster', function($app) {
            return new \FelixL7\Toast\Models\Toaster;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bootstrap-toast');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/bootstrap-toast'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('bootstrap-toast.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/bootstrap-toast'),
        ], 'public');
    }
}