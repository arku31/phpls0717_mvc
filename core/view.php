<?php

namespace App;

use Twig_Environment;
use Twig_Loader_Array;

class View
{
    protected $loader;
    protected $twig;

    public function __construct($data = [])
    {
        //[
        //'index' => 'Hello {{ name }}!',
        //]
        $this->loader = new \Twig_Loader_Filesystem('views');
        $this->twig = new Twig_Environment($this->loader);

    }
    public function render(String $filename, array $data)
    {
        echo $this->twig->render($filename.".php", $data);
//        require_once __DIR__."/../views/".$filename.".php";
    }
}