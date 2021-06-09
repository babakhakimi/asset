<?php


namespace Lorito\Support\Facades;

/**
 * @method static \Lorito\Asset\Asset container(string $container = 'default')
 * @method static \Lorito\Asset\Asset addVersioning()
 * @method static \Lorito\Asset\Asset removeVersioning()
 * @method static \Lorito\Asset\Asset prefix(?string $path = null)
 * @method static \Lorito\Asset\Asset add(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method static \Lorito\Asset\Asset style(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method static \Lorito\Asset\Asset script(string|array $name, string $source, string|array $dependencies = [], string|array $attributes = [], string|array $replaces = [])
 * @method static string styles()
 * @method static string scripts()
 * @method static string show()
 * @method static string toHtml()
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