<?php

require 'routes.php';

/**
 * setup the templating engine
 */
$view = $app->view();
$view->setTemplatesDirectory('../app/Resources/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];


/**
 * setup DB configuration
 */
$app->container->singleton("db", function(){
    return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root', 'toor');
});