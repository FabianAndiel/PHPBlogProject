<?php

namespace App\Core;

abstract class AbstractController{

    function render($param,$view) {
        extract($param);
        require __DIR__."../../views/posts/{$view}.php";
    }

} 