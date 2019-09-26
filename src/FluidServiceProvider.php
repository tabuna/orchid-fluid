<?php

declare(strict_types=1);

namespace Tabuna\Fluid;

use Illuminate\Support\ServiceProvider;

/**
 * Class FluidServiceProvider
 *
 */
class FluidServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {

            $this->app['view']->replaceNamespace('platform', __DIR__ . '/../views/');
            $path = realpath(PLATFORM_PATH.'/resources/views');

            $this->loadViewsFrom($path, 'platform');
        });
    }
}
