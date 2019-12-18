<?php

App::bind('config', require 'config.php');
$env = App::get('config')['env'];


//Connect to DB
$db = new DBHandler(App::get('config')['database']);

App::bind('database', new QueryBuilder($db->connect()));