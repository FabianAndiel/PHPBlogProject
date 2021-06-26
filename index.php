<?php

require __DIR__ . "/src/init.php";

$pathinfo = $_SERVER["PATH_INFO"];

$routes = [
    "/index" => [
        'controller' => 'postsController',
        'method' => 'allPosts'
    ],
    "/post" => [
        'controller' => 'postsController',
        'method' => 'singlePost'        
        ]
    ];

    if(isset($routes[$pathinfo])) {
        $route = $routes[$pathinfo];
        $controller = $container->make($route["controller"]);
        $method = $route["method"];
        $controller->$method();
    }



