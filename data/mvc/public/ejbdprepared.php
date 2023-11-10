<?php
require "../bdcon.php";


try {
    $dbh = new PDO(DSN2, USERNAME, PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // FORMA A: NAMED PLACEHOLDER
    $sql = "INSERT INTO " . TABLACLIENTES . "(ID,NAME,Adress,Age,Telephone,Fecha) 
                VALUES(:ID,:nombre,:direccion,:edad,:telefono,:fecha)";
    $statement = $dbh->prepare($sql);

    // OPCION 1: bindPARAM -> variable es una referencia.
    // Son valores que recojo $_POST , $_GET , $_COOKIE , $_SESSION
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];


    $statement->bindParam(":ID",$id);
    $statement->bindParam(":nombre",$nombre);
    $statement->bindParam(":direccion",$direccion);
    $statement->bindParam(":edad",$edad);
    $statement->bindParam(":telefono",$telefono);
    $statement->bindParam(":fecha",$fecha);

    echo "Has añadido una persona a la base de datos.";

} catch (Exception $ex) {
    echo "Fallo en la conexion : " . $ex->getMessage();
    //throw $th;
} finally {
    $dbh = null; // cierro la conexion
    echo "<br>Conexion cerrada";
}
