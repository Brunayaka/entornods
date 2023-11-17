<?php
namespace App\Controllers;

class LoginController{
    function __construct()
    {
        echo "<br>Construyendo el LOGIN CONTROLLER";
    }
    function index(){
        require('../views/login/index.php');
    }
    function show(){
        echo "<br>Mostrando el SHOW de LOGIN CONTROLLER";
    }
    
}