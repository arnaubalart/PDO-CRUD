
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear</title>
</head>
<body>
    <h1>Crear alumnos</h1><br>
    <form action="creacion.php" method="POST">
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="Introduce el email"><br>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" placeholder="Introduce el nombre"><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" placeholder="Introduce el apellido"><br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" placeholder="Introduce el edad"><br>
        <input type="submit" name="enviar" value="Crear">
    </form>
    
</body>
</html>
