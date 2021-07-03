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

    public function getColumnID()
    {
        // return "postid";
    }

    function getColumnUSERNAME(){
        return "username";
    }

    
    function getColumnUSERID(){
        return "userid";
    }


}