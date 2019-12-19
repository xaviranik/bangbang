<?php

class PagesController {

    public function home()
    {
        
        //Getting all records from todos table
        $task = App::get('database')->selectAll('todos');
        require 'views/index.bang.php';
    }

    public function about()
    {
        require 'views/about.bang.php';
    }

    public function contact()
    {
        require 'views/contact.bang.php';
    }
}