<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * Load a file on the server
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Attempt to direct the user
     * @param string $uri
     * @param $requestType
     * @return mixed
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new OutOfBoundsException('No route was found for this URI');
    }
}