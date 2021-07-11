<?php 

namespace App\User;

class LoginService {

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function attempRegister($username,$password) {

        $user = $this->userRepository->fetchAllByUSERNAME($username);

        if(empty($user)) {
            $this->userRepository->insertNewUser($username,$password);
            return true;
        }

        return false;
    }

    public function checkLogin() {
        if(isset($_SESSION["username"])) {
            return true;
        }
        else {
            header("Location:login");
            return false;
        }
    }

    public function logout() {
        unset($_SESSION["username"]);
        session_regenerate_id(true);
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