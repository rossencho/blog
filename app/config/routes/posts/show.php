<?php

$app->get('/posts/:postId', function($postId) use($app){
    $post = $app->db->prepare("
            SELECT * FROM posts WHERE posts.id = :pId
            ");
    $post->execute(['pId'=>$postId]);
    $post = $post->fetch(PDO::FETCH_ASSOC);
    if (!$post){
        $app->notFound();
    }
    $app->render('posts/show.php',["post"=>$post]);
})->name('posts.show');

