<?php
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? WHERE email=?");
// Bind
$email=$_POST['email'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$edad = $_POST['edad'];
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $edad);
$stmt->bindParam(4, $email);
// Execute
if ($stmt->execute()){
    echo "entra";
    header('location:vista.php');
}else{
    echo "no entra";
}