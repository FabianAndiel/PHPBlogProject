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

        if(!empty($_POST["username"]) AND !empty($_POST["password"]) ){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

            if($this->loginService->attempRegister($username,$hashedPassword)) {
                header("Location:login");
                return true;
            }

            else{ 
               echo "this username exists already";
            }
        }
        $this->render("user/register",
        [

        ]);
    }

    public function dashboard() {

        if($this->loginService->checkLogin()) {
            echo $_SESSION["username"]." ist eingeloggt";
        }
       
    }

    public function logout() {
        $this->loginService->logout();
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
