<?php

namespace App\Core;

use PDO; 


abstract class AbstractRepository {

    protected $pdo; 


    abstract public function getTableName();

    abstract public function getModelName();

    abstract public function getColumn();

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
        $column = $this->getColumn();
        $statement = $this->pdo->prepare("SELECT * FROM $posts WHERE $column = :id ");
        $statement->execute(array('id'=> $id));
        $statement->setFetchMode(PDO::FETCH_CLASS,$model);
        return $statement->fetch(PDO::FETCH_CLASS);
    }

    public function fetchAllBy($id){
        
        $comments = $this->getTableName();
        $model = $this->getModelName();
        $column = $this->getColumn();
        $statement = $this->pdo->prepare("SELECT * FROM $comments WHERE $column = :id ");
        $statement->execute(array('id'=> $id));
        $statement->setFetchMode(PDO::FETCH_CLASS,$model);
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }



} 