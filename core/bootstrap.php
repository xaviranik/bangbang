<?php

$config = require 'core/config.php';
require 'core/database/DBHandler.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/helpers.php';

//Connect to DB
$db = new DBHandler($config['database']);
return new QueryBuilder($db->connect());