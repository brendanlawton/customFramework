<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// register and find the route associated with the requested uri
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
