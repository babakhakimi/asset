<?php

namespace Lorito\Asset;

use Illuminate\Support\Traits\ForwardsCalls;

class Factory
{
    use ForwardsCalls;

    /**
     * Asset Dispatcher instance.
     *
     * @var \Lorito\Asset\Dispatcher
     */
    protected $dispatcher;

    /**
     * All of the instantiated asset containers.
     *
     * @var array
     */
    protected $containers = [];

    /**
     * Construct a new environment.
     * @param Dispatcher $dispatcher
     */
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * Get an asset container instance.
     *
     * <code>
     *     // Get the default asset container
     *     $container = Lorito\Asset::container();
     *
     *     // Get a named asset container
     *     $container = Lorito\Asset::container('footer');
     * </code>
     */
    public function container(string $container = 'default'): Asset
    {
        if (! isset($this->containers[$container])) {
            $this->containers[$container] = new Asset($container, $this->dispatcher);
        }

        return $this->containers[$container];
    }

    /**
     * Magic Method for calling methods on the default container.
     *
     * <code>
     *     // Call the "styles" method on the default container
     *     echo Lorito\Asset::styles();
     *
     *     // Call the "add" method on the default container
     *     Lorito\Asset::add('jquery', 'js/jquery.js');
     * </code>
     *
     * @return mixed
     */
    public function __call(string $method, array $parameters)
    {
        return $this->forwardCallTo($this->container(), $method, $parameters);
    }
}
