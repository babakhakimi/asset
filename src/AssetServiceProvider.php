<?php

namespace Lorito\Asset;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerResolver();

        $this->registerDispatcher();

        $this->registerAsset();

    }

    /**
     * Register the service provider.
     */
    protected function registerAsset(): void
    {
        $this->app->singleton('lorito.asset', static function ($app) {
            return new Factory($app->make('lorito.asset.dispatcher'));
        });
    }

    /**
     * Register the service provider.
     */
    protected function registerDispatcher(): void
    {
        $this->app->singleton('lorito.asset.dispatcher', static function ($app) {
            return new Dispatcher(
                $app->make('files'),
                $app->make('html'),
                $app->make('lorito.asset.resolver'),
                $app->publicPath()
            );
        });
    }

    /**
     * Register the service provider.
     */
    protected function registerResolver(): void
    {
        $this->app->singleton('lorito.asset.resolver', static function () {
            return new DependencyResolver();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['lorito.asset', 'lorito.asset.dispatcher', 'lorito.asset.resolver'];
    }
}
