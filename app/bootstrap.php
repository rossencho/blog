<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim([
    'view'=> new \Slim\Views\Twig()
]);
require 'config/config.php';


$app->run();