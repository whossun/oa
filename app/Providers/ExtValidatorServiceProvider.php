<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Extensions\ExtValidator as ExtValidator;

class ExtValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
        $this->app['validator']->resolver(function ($translator, $data, $rules, $messages) {
            return new ExtValidator($translator, $data, $rules, $messages);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
