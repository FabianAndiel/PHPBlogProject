<?php

namespace App\Home;

use App\Core\AbstractRepository;

class HomeRepository extends AbstractRepository {

    function getTableName()
    {
        
    }

    function getModelName()
    {
        return HomeModel::class;
    }

    public function getColumn()
    {
        return "postid";
    }



}