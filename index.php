<?php
/**
 * Copyright (c) CodeEngine Academy by Markus Lech. This is a Projekt from CodeEngine Academy. All rights reserved.
 ******************************************************************************/

require __DIR__ . "/src/init.php";

$postsController = $container->make("postsController");
$postsController->allPosts();
