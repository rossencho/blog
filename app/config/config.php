<?php

require 'routes.php';
require 'db.php';

/**
 * setup the templating engine
 */
$view = $app->view();
$view->setTemplatesDirectory('../app/Resources/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];


/**
 * load up DB connection
 */
$app->container->singleton("db", function(){
    return (new DataBaseSlim())->connect();
});