<?php
namespace App\Controllers;

class UserController{
    function __construct()
    {
        echo "<br>Contruyendo USER controller...";
    }

    function index(){
        require('../views/user/index.php');
    }

    function show(){
        echo "<br>En el SHOW de USER";
    }
}// Fin clase
