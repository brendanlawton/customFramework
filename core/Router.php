<?php

class Router
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param string $uri
     * @return mixed
     * @throws Exception
     */
    public function direct($uri)
    {

        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new OutOfBoundsException('No route was found for this URI');
    }
}