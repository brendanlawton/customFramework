<?php

$app['database']->insert('names', [
    'personName' => htmlspecialchars($_POST['name'])
]);

header('Location: /');
