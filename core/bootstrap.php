<?php

require 'core/env.php';
require 'core/database/DBHandler.php';
require 'core/database/QueryBuilder.php';
require 'core/helpers.php';

//Connect to DB
$db = new DBHandler();
return new QueryBuilder($db->connect());