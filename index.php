<?php

require __DIR__ . "/src/init.php";

$pathinfo = $_SERVER["PATH_INFO"];

$routes = [
    "/index" => [
        'controller' => 'homeController',
        'method' => 'showStart'
    ],
    "/post" => [
        'controller' => 'postsController',
        'method' => 'singlePost'        
    ],
    "/blogposts" => [
        'controller' => 'postsController',
        'method' => 'allPosts'        
        ]
    ];

    if(isset($routes[$pathinfo])) {
        $route = $routes[$pathinfo];
        $controller = $container->make($route["controller"]);
        $method = $route["method"];
        $controller->$method();
    }



