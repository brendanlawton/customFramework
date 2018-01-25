<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

// register and find the route associated with the requested uri
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
