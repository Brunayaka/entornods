<?php
    require "../bdcon.php";

    echo "<h2>BBDD Sentecias</h2>";

    /*
        1- Preparar la sentencia -> prepare:
            - named placeholder : :nomvariable
            - question mark placeholder :?

        2- Vincular valores a las variables
            - bindParam
            - bindValue
        3- Ejecutar la sentencia -> execute
    */

    try{
        $dbh = new PDO(DSN2,USERNAME,PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // FORMA A: NAMED PLACEHOLDER
        $sql = "INSERT INTO ".TABLACLIENTES ."(ID,NAME,Adress,Age,Telephone) 
                VALUES(:ID,:nombre,:direccion,:edad,:telefono)";
        // FORMA B: QUESTION MARK PLACEHOLDER
        $sql2 = "INSERT INTO ".TABLACLIENTES."(ID,NAME,Adress,Age,Telephone) 
        VALUES(?,?,?,?,?)";
        
        $statement = $dbh->prepare($sql2);
        
        // OPCION 1: bindPARAM -> variable es una referencia.
        // Son valores que recojo $_POST , $_GET , $_COOKIE , $_SESSION
        $id = null;
        $nombre = "esther";
        $direccion = "Avenida Navarra";
        $edad = 34;
        $telefono = 123456789;


        /*
        $statement->bindParam(":ID",$id);
        $statement->bindParam(":nombre",$nombre);
        $statement->bindParam(":direccion",$direccion);
        $statement->bindParam(":edad",$edad);
        $statement->bindParam(":telefono",$telefono);
        */

        /*
        // OPCION 2: bindValue -> Asocio los valores.
        $statement->bindValue(":ID",$id);
        $statement->bindValue(":nombre",$nombre);
        $statement->bindValue(":direccion",$direccion);
        $statement->bindValue(":edad",$edad);
        $statement->bindValue(":telefono",$telefono);

        $edad = 65;

        // ejecutar la sentencia
        $statement->execute();
        */

        /*
        // con QUESTION MARK PLACEHOLDER
        $statement->bindParam(1,$id);
        $statement->bindParam(2,$nombre);
        $statement->bindParam(3,$direccion);
        $statement->bindParam(4,$edad);
        $statement->bindParam(5,$telefono);
        */
        /*
        $statement->bindValue(1,$id);
        $statement->bindValue(2,$nombre);
        $statement->bindValue(3,$direccion);
        $statement->bindValue(4,$edad);
        $statement->bindValue(5,$telefono);

        $direccion = "Avenida avenida";
        $statement->execute();
        */
        echo "<h4>Insercion correctamente</h4>";

        
    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
        //throw $th;
    } finally {
        $dbh = null; // cierro la conexion
        echo "<br>Conexion cerrada";
    }