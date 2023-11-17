<?php

namespace App\Controllers;

class ClientController{
    function __construct()
    {
        echo "<br>Construyendo el CLIENT CONTROLLER";
    }
    function index(){
        require('../views/client/index.php');
    }
    function show(){
        echo "<br>Mostrando el SHOW de CLIENT CONTROLLER";
    }
}