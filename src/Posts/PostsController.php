<?php 

namespace App\Posts;

use App\Core\AbstractController;

class PostsController extends AbstractController {

    public function __construct(PostsRepository $postsRepository, CommentsRepository $commentsRepository){
            $this->postsRepository = $postsRepository;
            $this->commentsRepository = $commentsRepository;
    }

    public function allPosts(){

        $posts = $this->postsRepository->fetchAll();
        
        $this->render("posts/allposts", [
            'posts' => $posts
        ]);
    }

    public function singlePost(){

        $postid = $_GET['id'];

        var_dump($_POST);


        if(isset($_POST["CommentText"])) {
            $this->commentsRepository->insertCommentIntoPost($postid,$_POST["CommentText"]);
        }


        $post = $this->postsRepository->fetchOne($postid);
        $comments = $this->commentsRepository->fetchAllBy($postid);
       

        $this->render("posts/singlepost", [
            'post' => $post,
            'comments' => $comments
        ]);
    }

}