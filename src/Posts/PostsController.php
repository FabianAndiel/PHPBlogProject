<?php 

namespace App\Posts;

class PostsController{

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;     
    }

    public function index() {
        $posts = $this->postsRepository->fetchPosts();
        echo "Ich wurde ausgeführt";
    }

}