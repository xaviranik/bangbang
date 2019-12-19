<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());

App::get('database')->insert('todos', [
    'todo' => 'foobar',
    'completed' => 0
]);