<?php

$query = require 'core/bootstrap.php';

require 'views/index.bang.php';



//Getting all records from todos table
$task = $query->selectAll('todos');