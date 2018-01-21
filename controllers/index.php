<?php

$names = App::get('database')->selectAll('names');

require 'views/index.view.php';
