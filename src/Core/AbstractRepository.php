<?php

namespace App\Core;

use PDO; 


abstract class AbstractRepository {

    private $pdo; 


    abstract public function getTableName();

    abstract public function getModelName();

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll(){
        
        $posts = $this->getTableName();
        $model = $this->getModelName();
        $statement = $this->pdo->query("SELECT * FROM $posts");
        return $statement->fetchAll(PDO::FETCH_CLASS,$model);
    }
    
    public function fetchOne($id){
        
        $posts = $this->getTableName();
        $model = $this->getModelName();
        $statement = $this->pdo->prepare("SELECT * FROM $posts WHERE id = :id ");
        $statement->execute(array('id'=> $id));
        $statement->setFetchMode(PDO::FETCH_CLASS,$model);
        return $statement->fetch(PDO::FETCH_CLASS);
    }


} 