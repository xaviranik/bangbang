<?php

$app = [];

$app['config'] = require 'config.php';
$env = $app['config']['env'];

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/DBHandler.php';
require 'core/database/QueryBuilder.php';
require 'core/helpers.php';

//Connect to DB
$db = new DBHandler($app['config']['database']);
$app['database'] = new QueryBuilder($db->connect());