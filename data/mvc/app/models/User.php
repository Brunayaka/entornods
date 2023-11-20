<?php
namespace App\Models;
require "../core/Model.php";

use Core\Model;
use PDO;
use DateTime;

class User extends Model{

    public function __construct()
{

}

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
        $dbh = User::db();
        $sql = "SELECT * FROM users WHERE id = :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id",$id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS,User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        
        return $user;

    }//find

    public function insert()
    {
        $db = User::db();
        $stmt = $db->prepare('INSERT INTO users(name, surname, birthdate, email) VALUES(:name, :surname, :birthdate, :email)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
    }

    public static function save(){
        echo "<br> Actualizando un registro..";
    }


    public static function delete(){
        echo "<br> Elimino un registro..";
    }

} // finclass