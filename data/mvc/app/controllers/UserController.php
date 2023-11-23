<?php
namespace App\Controllers;

require "../app/models/User.php";
use App\Models\User;

class UserController{
    function __construct()
    {
        // echo "<br>Contruyendo USER controller...";
    }

    function index(){
        $users = User::all();
        require('../views/user/index.php');
    }

    function show($args){
        $id = (int) $args[0];
        $user = User::find($id);
        require('../views/user/show.php');
    }

    public function create()
    {
        require '../views/user/create.php';
    }
    
    public function store()
    {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert(); // Llamo al modelo
        header('Location:/user');
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        require '../views/user/edit.php';
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        $user = User::find($id);
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();
        header('Location:/user');
    }
    public function delete($arguments){
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();
        header('Location:/user');

    }
}// Fin clase
