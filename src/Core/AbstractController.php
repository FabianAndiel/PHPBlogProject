<?php

namespace App\Core;

abstract class AbstractController{

    function render($view,$param) {
        extract($param);
        require __DIR__."/../views/{$view}.php";
    }

} 