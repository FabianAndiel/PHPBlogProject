<?php

namespace App\Posts;

use App\Core\AbstractRepository;
use App\Posts\CommentsModel;
use PDO;

class CommentsRepository extends AbstractRepository {
    
    function getTableName()
    {
        return "comments";
    }

    function getModelName()
    {
       return CommentsModel::class; 
    }

    public function getColumnID()
    {
        return "postid";
    }

    function getColumnUSERNAME(){
        return "username";
    }

    public function insertCommentIntoPost($postid,$content) {
        $table = $this->getTableName();
     
        $statement = $this->pdo->prepare("INSERT INTO $table (id, postid, content)
        VALUES (null, :postid, :content)");
        $statement->execute(array('postid'=> $postid,'content'=> $content));
        
    }

    
    function getColumnUSERID(){
        return "userid";
    }


}