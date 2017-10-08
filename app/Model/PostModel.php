<?php
namespace Model;

class PostModel{
    
    public function getAll(){
        /**
         * need to check how to make dependency injection for $app
         * or use it as a service
         */
        global $app;
        $posts=$app->db->prepare("SELECT * FROM  posts;");
        $posts->execute();
        $result=$posts->fetchAll();
        
        return $result;
    }
    
    public function getPost($postId){
        /**
         * need to check how to make dependency injection for $app
         * or use it as a service
         */
        global $app;
        $post = $app->db->prepare("
                SELECT * FROM posts WHERE posts.id = :pId
                ");
        $post->execute(['pId'=>$postId]);
        $post = $post->fetch(\PDO::FETCH_ASSOC);
        
        return $post;
    }
}
