<?php

namespace HepplerDotNet\FlashToastr;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('flash', function () {
            return $this->app->make('HepplerDotNet\FlashToastr\FlashNotifier');
        });
        $this->mergeConfigFrom(
        __DIR__.'/config/flash-toastr.php', 'flash-toastr'
        );
    }

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'flash-toastr');

        $this->publishes([
            __DIR__.'/views/' => resource_path('views/vendor/flash-toastr'),
        ], 'flash-views');

        $this->publishes([
            __DIR__.'/config/' => config_path(),
        ], 'flash-config');

        $this->publishes([
            __DIR__.'/config/' => config_path(),
            __DIR__.'/views/' => resource_path('views/vendor/flash-toastr'),
        ], 'flash');
    }
}
