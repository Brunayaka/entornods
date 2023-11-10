<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="ejbdprepared.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="nombre" id="nombre" required ><br><br>
        <label for="adress">Direccion</label>
        <input type="text" name="direccion" id="adress" required ><br><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad" required ><br><br>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" required ><br><br>
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha" id="fecha" required ><br><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>