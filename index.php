<?php

require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());

$app['database']->insert('todos', [
    'todo' => 'foobar',
    'completed' => 0
]);