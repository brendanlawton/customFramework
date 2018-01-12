<?php

$database = require 'core/bootstrap.php';

// get the requested page from the url
$uri = trim($_SERVER['REQUEST_URI'], '/');

// register the routes and their associated files
$router = Router::load('routes.php');

// match the route with the requested url
require $router->direct($uri);