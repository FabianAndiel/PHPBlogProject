<?php

namespace App\Posts;

use ArrayAccess;
use PDO;

class PostsRepository {

     
    private $pdo; 

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function fetchAll(){

        $statement = $this->pdo->query("SELECT * FROM `posts`");
        return $statement->fetchAll(PDO::FETCH_CLASS,PostsModel::class);
    }
    
    public function fetchOne($id){
    
        $statement = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id ");
        $statement->execute(array('id'=> $id));
        $statement->setFetchMode(PDO::FETCH_CLASS,PostsModel::class);
        return $statement->fetch(PDO::FETCH_CLASS);
    }

}