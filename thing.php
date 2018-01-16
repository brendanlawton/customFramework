<?php

$arr = [
'one' => 'apple',
'two' => 'banana'
];

var_dump(implode(array_keys($arr), ', '));
