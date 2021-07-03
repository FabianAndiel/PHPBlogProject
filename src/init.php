<?php

require_once  __DIR__.'./core/Container.php';

require __DIR__."/../autoloader.php";
require __DIR__."/database.php";

$container = new \App\Core\Container();

function html(string $string):string {

    $formattedString= htmlentities($string,ENT_QUOTES,'UTF-8');
    $formattedString = str_replace('&lt;br&gt;','<br>',$formattedString);
    return $formattedString;
}

// $test = $container->make("userRepository");
// var_dump($test->fetchAllByUSERID(1));