<?php
require 'views/index.bang.php';


//Getting all records from todos table
$task = App::get('database')->selectAll('todos');