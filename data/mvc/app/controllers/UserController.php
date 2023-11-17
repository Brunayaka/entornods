<?php
namespace App\Controllers;

require "../app/models/User.php";
use App\Models\User;

class UserController{
    function __construct()
    {
        echo "<br>Contruyendo USER controller...";
    }

    function index(){
        $users = User::all();
        require('../views/user/index.php');
    }

    function show(){
        echo "<br>En el SHOW de USER";
    }
}// Fin clase
