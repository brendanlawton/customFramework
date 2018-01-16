<?php

$names = $app['database']->selectAll('names');

require 'views/index.view.php';
