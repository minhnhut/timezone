<?php

namespace MinhNhut\Timezone;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'timezone');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/timezone')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('MinhNhut\Timezone\TimezoneController');
    }
}
