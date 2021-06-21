<?php 

namespace App\Posts;

use App\Core\Container;

class PostsController {

    public function __construct($postsRepository){
            $this->postsRepository = $postsRepository;
    }

    protected function render($view, $parameter){
        
        extract($parameter);
        //var_dump($parameter);
        require __DIR__ . "./../views/{$view}.php";
    }


    public function allPosts(){

        $posts = $this->postsRepository->fetchPosts();

        $this->render("posts/allposts", [
            'posts' => $posts
        ]);
    }

    public function singlePost(){

        $postid = $_GET['id'];
        $post = $this->postsRepository->fetchPost($postid);

        $this->render("posts/singlepost", [
            'post' => $post
        ]);
    }
}