<?php

namespace App\User;

use App\Core\AbstractRepository;

class UserRepository extends AbstractRepository {


        function getModelName()
        {
            return UserModel::class;
        }
        
        function getTableName()
        {
            return "users";
        }
    
        function getColumnID()
        {
            return "userid";   
        }

        function getColumnUSERNAME(){
            return "username";
        }

        function getColumnUSERID(){
            return "userid";
        }


}