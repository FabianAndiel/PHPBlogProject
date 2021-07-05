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

        public function insertNewUser($username,$password) {
            $table = $this->getTableName();
         
            $statement = $this->pdo->prepare("INSERT INTO $table (userid, username, password)
            VALUES (null, :username, :password)");
            $statement->execute(array('username'=> $username,'password'=> $password));
            
        }


}