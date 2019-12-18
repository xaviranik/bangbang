<?php

$app = [];

$app['config'] = require 'config.php';
$env = $app['config']['env'];

//Connect to DB
$db = new DBHandler($app['config']['database']);
$app['database'] = new QueryBuilder($db->connect());