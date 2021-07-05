<?php

namespace App\User;

use App\Core\AbstractController;
use App\User\UserRepository;
use App\User\LoginService;

class UserController extends AbstractController{

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function register() {

        var_dump($_POST);

        if(!empty($_POST["username"]) AND !empty($_POST["password"]) ){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

            $newuser = $this->userRepository->fetchAllByUSERNAME($username);

            if(!empty($newuser)) {
                echo "Diesen Benutzernamen gibt es bereits";
            }

            else{ 
               
                $this->userRepository->insertNewUser($username,$hashedPassword);
            }
        }


        $this->render("user/register",
        [

        ]);
    }

    public function dashboard() {
        if(isset($_SESSION["username"])) {
            echo $_SESSION["username"]." ist eingeloggt";
        }
        else {
            header("Location:login");
        }
    }

    public function logout() {
        unset($_SESSION["username"]);
        session_regenerate_id(true);
        header("Location:login");
    }

    public function login() {
        // var_dump($_POST);

        $notice = null;

        if(!empty($_POST["username"]) AND !empty($_POST["password"]) ){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            

            if($this->loginService->attempLogin($username,$password)) {
                header("Location:dashboard");
                return;
            }

            else{ 
                echo "login Daten passen nicht";
            }
        }

    
        $this->render("user/loginuser", [
            'notice' => $notice
        ]);
    }
}
