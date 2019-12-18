<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());

App::get('database')->insert('todos', [
    'todo' => 'foobar',
    'completed' => 0
]);