<?php
//require "../vendor/autoload.php";
require '../Eloquent/config.php';
$user = User::all()->random(1);
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false
));
$data['name'] = $user->username;
$data['age'] = $user->age;
echo $twig->render('index.html', $data);