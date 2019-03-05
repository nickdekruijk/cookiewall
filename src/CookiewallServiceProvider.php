<?php

namespace NickDeKruijk\Cookiewall;

class CookiewallServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('cookiewall.php'),
        ], 'config');
        $this->loadTranslationsFrom(__DIR__.'/translations', 'cookiewall');
        $this->loadViewsFrom(__DIR__.'/views', 'cookiewall');
        $this->registerHelpers();
    }

    /**
     * Register helpers file
     */
    public function registerHelpers()
    {
        if (file_exists($file = __DIR__.'/helpers.php')) {
            require $file;
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config.php', 'cookiewall');
    }
}
