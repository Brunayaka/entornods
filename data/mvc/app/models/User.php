<?php
namespace App\Models;
require "../core/Model.php";

use Core\Model;
use PDO;

class User extends Model{



    // @return Todos los registris de la tabla user de la bbdd
    public static function all() {
        $dbh = User::db(); // otra forma --> self::db();
        $sql = "SELECT * FROM users";
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS,User::class);
        $users = $statement->fetchAll(PDO::FETCH_CLASS);
        return $users;


    }//all


    // @return Un usuario en particular de la bbdd
    // @param $id
    public static function find($id) {
        echo "<br> Recupero un usuario";
        // return User::USERS[$id-1];
        
    }//find

    public static function insert(){
        echo "<br> Creo un nuevo registro";
    }

    public static function save(){
        echo "<br> Actualizando un registro..";
    }


    public static function delete(){
        echo "<br> Elimino un registro..";
    }

} // finclass