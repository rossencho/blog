<?php

$app->get('/', '\Controller\PostController:listPosts')->setName("home");
$app->get('/posts/:postId', '\Controller\PostController:showPost')->setName("posts.show");



