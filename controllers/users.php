<?php
namespace App;

use PHPHtmlParser\Dom;

require_once __DIR__."/../models/user.php";

class Users
{
    public function test()
    {
        echo "asd";
    }

    public function testasd()
    {
        echo "asd";
    }

    public function index()
    {
        $users_model = new User(); //создаем объект
        $users = $users_model->all(); //получаем всех юзеров
        $view = new View();
        $data['users'] = $users;
        $view->render('users/index', $data);
    }

    public function first()
    {
        $users_model = new User();
        echo $users_model->first();
    }

    public function show()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $users_model = new User(); //создаем объект
        $user = $users_model->get($routes[3]); //получаем всех юзеров

        $view = new View();
        $data['user'] = $user;
        $view->render('users/show', $data);
    }

    public function parse()
    {
        $dom = new Dom;
        $content = file_get_contents('https://twig.symfony.com/');
        $dom->load($content);
        $a = $dom->find('h1.title_header')[0];
        echo $a->text; // "click here"
    }
}