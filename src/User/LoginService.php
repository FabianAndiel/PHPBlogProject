<?php 

namespace App\User;

class LoginService {

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function attempLogin($username,$password) {

        $user = $this->userRepository->fetchAllByUSERNAME($username);

        if(empty($user)) {
            return false;
        }

        if(password_verify($password,$user->password)) {
            $_SESSION["username"] = $user->username; 
            session_regenerate_id(true);    
            return true;
        }

        else {
            return false;
        }

    }


}