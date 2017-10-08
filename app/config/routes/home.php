<?php

$app->get('/', function() use($app){
    $posts = $app->db->query("
        SELECT 
        posts.*
        FROM posts
            ")->fetchAll(PDO::FETCH_ASSOC);
    $app->render('home.php', ['posts'=>$posts]);
})->name("home");
