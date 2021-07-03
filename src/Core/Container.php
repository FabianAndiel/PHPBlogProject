<?php

namespace App\Core;

use App\Posts\CommentsRepository;
use App\Home\HomeController;
use App\Home\HomeRepository;
use App\Posts\PostsRepository;
use App\Posts\PostsController;
use App\User\UserRepository;
use App\User\UserController;
use PDO;

class Container
{

    public $instance = [];
    public $buildguide = [];

    public function __construct()
    {
        $this->buildguide = [
            'pdo' => function () {
                $pdo = new PDO('mysql:host=localhost;dbname=phptrainingjuni;charset=utf8', 'root', '');
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            },
            'postsRepository' => function () {
                return new PostsRepository($this->make("pdo"));
            },
            'postsController'=> function() {
                return new PostsController($this->make("postsRepository"), $this->make("commentsRepository"));
            },
            'homeRepository' => function () {
                return new HomeRepository($this->make("pdo"));
            },
            'homeController'=> function() {
                return new HomeController($this->make("homeRepository"));
            },
            'commentsRepository' => function () {
                return new CommentsRepository($this->make("pdo"));
            },
            'userRepository' => function () {
                return new UserRepository($this->make("pdo"));
            },
            'userController' => function () {
                return new UserController($this->make("userRepository"));
            }


        ];
    }

    // Make soll hier wirklich der Macher über alle Klassen sein 
    public function make($name)
    {   
        if(empty($this->instance[$name])) {
            $this->instance[$name] = $this->buildguide[$name](); 
            return $this->instance[$name];     
        }

            return $this->instance[$name];
    }


}


