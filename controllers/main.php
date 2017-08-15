<?php

namespace App;

class Main
{
    public function index()
    {
        $view = new View();
        $name = "Игорь";
        $data['name'] = $name;
        $data['asd'] = 'asd';
        $view->render("index", $data);
    }
}