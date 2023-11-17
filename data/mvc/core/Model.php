<?php
namespace Core;

require "../config/db.php";
// Importar classes PDO para evitar errores
use PDO;
use PDOException;
use const DSN;
use const USUARIO;
use const PASSWORD;

class Model{
    static function db(){

        try{
            $dbh = new PDO(DSN,USUARIO,PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "<br>Conexion correcta.<br>";
        } catch(PDOException $ex){
            echo "Fallo en la conexion: " . $ex->getMessage();
        }
        return $dbh; // devuelvo conexion a bbdd

    }// fin_db
}// fin_class