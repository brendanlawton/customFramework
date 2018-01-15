<?php

$database = require 'core/bootstrap.php';

// register and find the route associated with the requested uri
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
