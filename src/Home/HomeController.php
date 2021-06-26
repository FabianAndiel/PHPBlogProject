<?php

namespace App\Home;

use App\Core\AbstractController;

class HomeController extends AbstractController {

    public function showStart(){

    $this->render("home/home", [
    ]);
}
}