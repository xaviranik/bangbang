<?php

require 'core/env.php';
require 'core/DBHandler.php';
require 'core/helpers.php';

require 'views/index.bang.php';

//Connect to DB
$pdo = new DBHandler(ENV::$DB);
$pdo->connect();