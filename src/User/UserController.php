<?php

namespace App\User;

use App\Core\AbstractController;
use App\User\UserRepository;

class UserController extends AbstractController{

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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

    public function login() {
        // var_dump($_POST);

        $notice = null;

        if(!empty($_POST["username"]) AND !empty($_POST["password"]) ){
            
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $user = $this->userRepository->fetchAllByUSERNAME($username);
            var_dump($user->password);
            var_dump($password);

            if(!empty($user)){

                // if($user->password == $password) {
                if(password_verify($password,$user->password)) {
                    $notice = "password is fine";
                    die();
                }
                else {
                    $notice = "login daten stimmen nicht überein";
                }
            }

            else {
                $notice = "login passt nicht";
            }
        }

        else {
            if(empty($_POST["loginbutton"])){
                $notice = "bitte Formular ausfüllen";
            }
        }
    
        $this->render("user/loginuser", [
            'notice' => $notice
        ]);
    }
}
