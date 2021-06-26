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

}