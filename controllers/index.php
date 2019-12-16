<?php
require 'views/index.bang.php';


//Getting all records from todos table
$task = $app['database']->selectAll('todos');