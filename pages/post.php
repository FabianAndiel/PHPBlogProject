<?php

namespace App\Pages;

require __DIR__ . "/../src/init.php";

use App\Posts\PostsController;

$postController = $container->make("postsController");
$postController->singlePost();