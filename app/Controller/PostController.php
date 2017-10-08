<?php
namespace Controller;

class PostController
{
    public function listPosts() 
    {
        global $app;                           
        
        $posts=$app->db->prepare("SELECT * FROM  posts;");
        $posts->execute();
        $result=$posts->fetchAll();
        
        return $app->render('home.html.twig', ["posts"=>$result]);
    }
    
    
    public function showPost($postId){
        
        global $app;
        $post = $app->db->prepare("
                SELECT * FROM posts WHERE posts.id = :pId
                ");
        $post->execute(['pId'=>$postId]);
        $post = $post->fetch(\PDO::FETCH_ASSOC);
        if (!$post){
            $app->notFound();
        }
        return $app->render('posts/show.html.twig',["post"=>$post]);
    }
}