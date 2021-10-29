<?php
include 'conexion.php';
include 'alumno.php';
include_once 'cabecera.html';
$email=$_POST['email'];
$stmt = $pdo->prepare("SELECT * FROM alumnos WHERE email=?");
$stmt->bindParam(1,$email);
$stmt->execute();
$alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar</title>
</head>
<body>
    <h1>Modificar alumnos</h1><br>
    <form action="modificar.php" method="POST">
        <p>Email: <?php echo $email ?></p>
        <input type='hidden' name='email' value='<?php echo $email ?>'>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?php foreach ($alumnos as $alumno) {echo $alumno['nombre'];}?>"><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" value="<?php foreach ($alumnos as $alumno) {echo $alumno['apellido'];}?>"><br>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="<?php foreach ($alumnos as $alumno) {echo $alumno['edad'];}?>"><br>
        <input type="submit" name="enviar" value="Actualizar">
    </form>
    
</body>
</html>