<?php

namespace Shakil\SalatNotifier;

use Illuminate\Support\ServiceProvider;
use Shakil\SalatNotifier\Interfaces\SalatTimeInterface;
use Shakil\SalatNotifier\SalatTime;

class SalatNotifierServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SalatTimeInterface::class, SalatTime::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__.'/../config/salat-notifier.php' => config_path('salat-notifier.php'),
        ]);
    }
}
