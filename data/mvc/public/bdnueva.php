<?php
    require "../bdcon_testclients.php";

    echo "<h3>Mi base de datos</h3>";

    try{
        $dbh = new PDO(DSN, USERNAME, PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM clients";
        $sql2 = "INSERT INTO clients VALUES (null,'Pepito','Calle coso',35,677748787)";
        /*$registers = $dbh->query($sql);
        foreach($registers as $row){
            echo "Id : " . $row["ID"];
            echo "Nombre : " . $row["NAME"];
            echo "Direccion : " . $row["Adress"];
            echo "Edad : " . $row["Age"];
            echo "Teléfono : " . $row["Telephone"];
            echo "<br>";
        }*/

        $stmnt = $dbh->prepare($sql2);
        $stmnt->execute();

        


        $registers = $stmnt->fetchAll(PDO::FETCH_OBJ);
        foreach ($registers as $row) {
            echo "ID : " . $row->ID;
            echo "Nombre : " . $row->NAME;
            echo "Direccion : " . $row->Adress;
            echo "Edad : " . $row->Age;
            echo "Telefóno : " . $row->Telephone;
            echo "<br>";
        }
        echo "<br>";
        echo "Numero de filas devueltas " . count($registers);


    } catch (Exception $ex) {
        echo "Fallo en la conexion : " . $ex->getMessage();
        //throw $th;
    } finally {
        $dbh = null; // cierro la conexion
        echo "<br>Conexion cerrada";
    }