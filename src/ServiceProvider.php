<?php

namespace DragonCode\LaravelApp;

use DragonCode\LaravelApp\Commands\AppName;

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
