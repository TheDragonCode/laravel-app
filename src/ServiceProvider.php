<?php

namespace Helldar\LaravelApp;

use Helldar\LaravelApp\Commands\AppName;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AppName::class,
            ]);
        }
    }
}
