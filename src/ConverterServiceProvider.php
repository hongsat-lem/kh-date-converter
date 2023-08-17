<?php

namespace Cambodev\DateConverter;

use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton(__DIR__, function ($app) {
            return $app->make(Format::class);
        });
    }
}
