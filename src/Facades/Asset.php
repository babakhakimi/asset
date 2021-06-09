<?php


namespace Lorito\Support\Facades;

/**
 * @method \Lorito\Asset\Asset container(string $container = 'default')
 * @method \Lorito\Asset\Asset addVersioning()
 * @method \Lorito\Asset\Asset removeVersioning()
 * @method \Lorito\Asset\Asset prefix(?string $path = null)
 * @method \Lorito\Asset\Asset add(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method \Lorito\Asset\Asset style(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method \Lorito\Asset\Asset script(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method string styles()
 * @method string scripts()
 * @method string show()
 * @method string toHtml()
 *
 * @see \Lorito\Asset\Factory
 */

use Illuminate\Support\Facades\Facade;

class Asset extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lorito.asset';
    }

}