<?php
/**
 * Copyright (c) CodeEngine Academy by Markus Lech. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

namespace App\Core;
use App\Posts\PostsRepository;
use App\Posts\PostsController;
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
                return new PostsController($this->make("postsRepository"));
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


