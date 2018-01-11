<?php

$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$router->define($routes);

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);
