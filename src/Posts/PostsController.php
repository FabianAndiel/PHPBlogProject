<?php 

namespace App\Posts;

use App\Core\AbstractController;

class PostsController extends AbstractController {

    public function __construct($postsRepository){
            $this->postsRepository = $postsRepository;
    }

    public function allPosts(){

        $posts = $this->postsRepository->fetchAll();

        $this->render("posts/allposts", [
            'posts' => $posts
        ]);
    }

    public function singlePost(){

        $postid = $_GET['id'];
        $post = $this->postsRepository->fetchOne($postid);

        $this->render("posts/singlepost", [
            'post' => $post
        ]);
    }
}