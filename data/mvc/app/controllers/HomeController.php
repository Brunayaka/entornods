<?php

namespace App\Controllers;

class HomeController{
    function __construct()
    {
        echo "<br>Construyendo el HOME CONTROLLER";
    }
    function index(){
        require('../views/home/index.php');
    }
    function show(){
        echo "<br>Mostrando el SHOW de HOME CONTROLLER";
    }
}