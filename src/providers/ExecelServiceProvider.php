<?php

namespace Execel\ExecelFile\Providers;

use Illuminate\Support\ServiceProvider;
use  Execel\ExecelFile\Core\Execel;


class ExecelServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('execel', function () {
            return new Execel();
        });
    }

    public function provides()
    {
        return ['execel'];
    }


}
