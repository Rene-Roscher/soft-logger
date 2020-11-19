<?php

namespace RServices\SoftLogger;

use Illuminate\Support\ServiceProvider;

class SoftLoggerServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('soft-logger', function () {
            return new SoftLogger;
        });
    }
}
