<?php

namespace App\Pages;

require __DIR__ . "/../src/init.php";

use App\Posts\PostsController;

var_dump($_SERVER);


$postController = $container->make("postsController");
$postController->singlePost();