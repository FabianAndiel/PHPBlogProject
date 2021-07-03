<?php

namespace App\Posts;
use App\Core\AbstractRepository;

class PostsRepository extends AbstractRepository {

    public function getTableName() {
        return 'posts';    
    }

    public function getModelName() {
        return PostsModel::class;  
    }

    public function getColumnID()
    {
        return "id";
    }

    function getColumnUSERNAME(){
        return "username";
    }

    function getColumnUSERID(){
        return "userid";
    }
   

}