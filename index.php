<?php


require __DIR__ . "/src/init.php";


$pathinfo = $_SERVER["PATH_INFO"];

if($pathinfo == "/index") {
    $postsController = $container->make("postsController");
    $postsController->allPosts();    
}

elseif ($pathinfo == "/post") {
    $postsController = $container->make("postsController");
    $postsController->singlePost();
}
;
