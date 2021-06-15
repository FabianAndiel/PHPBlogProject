<?php

namespace App\Posts;

use ArrayAccess;
use PDO;

class PostsRepository {

     
    private $pdo; 

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchPosts(){

        $statement = $this->pdo->query("SELECT * FROM `posts`");
        return $statement->fetchAll(PDO::FETCH_CLASS,PostsModel::class);
    }
    
    function fetchPost($id){
    
        $statement = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id ");
        $statement->execute(array('id'=> $id));
        $statement->setFetchMode(PDO::FETCH_CLASS,PostsModel::class);
        return $statement->fetch(PDO::FETCH_CLASS);
    }

}