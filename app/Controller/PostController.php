<?php
namespace Controller;

use \Model\PostModel;

class PostController
{
    public function listPosts() 
    {
        /**
         * need to check how to make dependency injection for $app
         * or use it as a service
         */
        global $app;                           
        
        
        $posts = new PostModel();
        
        return $app->render('home.html.twig', ["posts"=>$posts->getAll()]);
    }
    
    
    public function showPost($postId){
        
        global $app;
        
        $post= new PostModel();
        
        if (!$post){
            $app->notFound();
        }
        return $app->render('posts/show.html.twig',["post"=>$post->getPost($postId)]);
    }
}