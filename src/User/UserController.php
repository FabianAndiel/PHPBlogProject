<?php

namespace App\User;

use App\Core\AbstractController;
use App\User\UserRepository;

class UserController extends AbstractController{

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login() {
        $this->render("user/loginuser", [

        ]);
    }
}
