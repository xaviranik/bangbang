<?php

class PagesController {

    public function home()
    {
        
        //Getting all records from todos table
        $task = App::get('database')->selectAll('todos');
        return view('index', compact($task));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}