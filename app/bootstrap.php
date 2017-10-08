<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\Slim([
    'view'=> new \Slim\Views\Twig()
]);
require __DIR__ . '/Controller/PostController.php';
require __DIR__ . '/config/config.php';


$app->run();