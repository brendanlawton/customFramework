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
    public function get($uri, $controller): void
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller): void
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Attempt to direct the user
     * @param string $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new OutOfBoundsException('No route was found for this URI');
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    private function callAction($controller, $action)
    {
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}